<!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script> // To validate Mobile Number
        function validateMobileNumber(event) {
        const keyCode = event.which ? event.which : event.keyCode;
        const inputValue = event.target.value;
        const maxLength = 10; // Maximum allowed length for mobile number

        // Allowing only numeric characters (0-9)
        if (keyCode < 48 || keyCode > 57) {
        return false;
        }

        // Restricting the length to 10 digits
        if (inputValue.length >= maxLength) {
        return false;
        }

        return true;
        }
    </script>

    <script> // Enable Submit Button after validation of reCAPTCHA
      function enableSubmitButton() {
        document.getElementById("submitButton").removeAttribute("disabled");
      }
    </script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>