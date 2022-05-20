// The debounce function receives our function as a parameter
const debounce = (fn) => {

  // This holds the requestAnimationFrame reference, so we can cancel it if we wish
  let frame;

  // The debounce function returns a new function that can receive a variable number of arguments
  return (...params) => {

    // If the frame variable has been defined, clear it now, and queue for next frame
    if (frame) {
      cancelAnimationFrame(frame);
    }

    // Queue our function call for the next frame
    frame = requestAnimationFrame(() => {

      // Call our function and pass any params we received
      fn(...params);
    });

  }
};

// Reads out the scroll position and stores it in the data attribute
// so we can use it in our stylesheets
const storeScroll = () => {
  if(window.scrollY <= 4) {
    document.documentElement.dataset.top = '';
  } else {
    delete document.documentElement.dataset.top;
  }
}

// Update for mobile
const storeMobile = (always) => {
  const MOBILE_WIDTH = 768;
  if(window.innerWidth < MOBILE_WIDTH && (document.documentElement.dataset.ismobile !== '' || always)) {
    document.documentElement.dataset.ismobile = '';
    window.dispatchEvent(new Event('onmobilesize'));
  } else if(window.innerWidth >= MOBILE_WIDTH && (document.documentElement.dataset.ismobile === '' || always)) {
    delete document.documentElement.dataset.ismobile;
    window.dispatchEvent(new Event('ontabletsize'));
  }
}

// Function to get mobile state
window.isMobileSize = () => document.documentElement.dataset.ismobile === '';


// Listen for new scroll events, here we debounce our `storeScroll` function
document.addEventListener('scroll', debounce(storeScroll), { passive: true });

// Listen for new resize events, here we debounce our `storeMobile` function
window.addEventListener('resize', debounce(storeMobile), { passive: true });


document.addEventListener('DOMContentLoaded', function(event) {
  // Update mobile flag for first time
  storeMobile(true);

  // Update scroll position for first time
  storeScroll();
});