const nextButton = document.querySelector('.next-button');
const backButton = document.querySelector('.back-button');
const formSteps = document.querySelectorAll('.form-step');

let currentStep = 0;

nextButton.addEventListener('click', () => {
    formSteps[currentStep].classList.remove('form-step-active');
    currentStep++;
    formSteps[currentStep].classList.add('form-step-active');
});

backButton.addEventListener('click', () => {
    formSteps[currentStep].classList.remove('form-step-active');
    currentStep--;
    formSteps[currentStep].classList.add('form-step-active');
});
