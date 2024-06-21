/*==== navbar toggle ===*/
let navBar = document.querySelector('.navbarlinks');
let menuBar = document.querySelector('#menuBtn');

menuBar.onclick = () => {
    navBar.classList.toggle('active');
}


window.onscroll = () => {
  let header = document.querySelector('header');

  header.classList.toggle('sticky', window.scrollY > 100);
}




/*=== customization ===*/

    // Initialize the state
    let carState = {
        color: 'imgamg/toyotawheel.png',
        wheels: 'imgamg/toyotawheel.png',
        decals: 'imgamg/toyotawheel.png',
    };

    // Function to change the color
    function changeColor(colorSrc) {
        carState.color = colorSrc;
        updateCar();
    }

    // Function to change the wheels
    function changeWheels(wheelSrc) {
        carState.wheels = wheelSrc;
        updateCar();
    }

    function changeDecals(decalSrc) {
      carState.decals = decalSrc;
      updateCar();
  }

    // Function to update the car images based on the current state
    function updateCar() {
        document.getElementById('carColor').src = carState.color;
        document.getElementById('carWheels').src = carState.wheels;
        document.getElementById('carDecals').src = carState.decals;
        // Update other parts similarly...
    }

    // Optionally initialize the car with default values
    updateCar();

 