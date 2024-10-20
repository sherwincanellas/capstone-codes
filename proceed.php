
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="proceed.css">
    <link rel="stylesheet" href="style3.css">
    <title>BCP-Admission</title>
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="BCP-Admission.php">
                <img src="img/logoooo.png">
            </a>
        </div>
        <ul class="nav-links">
        <li id="#"class="link"><a href="BCP-Admission.php">Home</a></li>
            <li id="link1" class="link"><a href="#">Applications</a></li>
            <li id="link3" class="link"><a href="#">About Us</a></li>
        </ul>
</nav>
        <div class="frame">
    <header>Basic Information</header><br>

    <!-- Step 1: Basic Information Form -->
    <form id="admissionForm" action="connection.php" method="POST">
        <div class="form-step form-step-active">
            <div class="input-field">
                <label>Admission Type *</label>
                <select name="admission_type" required>
                    <option disabled selected></option>
                    <option value="New Regular">New Regular</option>
                    <option value="Transferee">Transferee</option>
                    <option value="Returnee">Returnee</option>
                </select>
            </div>

            <div class="input-field">
                <label>Last Name *</label>
                <input type="text" name="last_name" required>
            </div>

            <div class="input-field">
                <label>First Name *</label>
                <input type="text" name="first_name" required>
            </div>

            <div class="input-field">
                <label>Middle Name</label>
                <input type="text" name="middle_name">
            </div>

            <div class="input-field">
                <label>Suffix</label>
                <input type="text" name="suffix">
            </div>

            <div class="input-field">
                <label>Sex *</label>
                <select name="sex" required>
                    <option disabled selected></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="input-field">
                <label>Civil Status *</label>
                <input type="text" name="civil_status" required>
            </div>

            <div class="input-field">
                <label>Religion *</label>
                <input type="text" name="religion" required>
            </div>

            <div class="input-field">
                <label>Birthday *</label>
                <input type="date" name="birthday" required>
            </div>

            <div class="input-field">
                <label>Email Address *</label>
                <input type="text" name="email_address" required>
            </div>

            <div class="input-field">
                <label>Contact Number *</label>
                <input type="number" name="contact_number" required>
            </div>

            <div class="input-field">
                <label>Facebook / Messenger Name (Optional)</label>
                <input type="text" name="facebook_messenger_name">
            </div>

            <!-- Next Button -->
            <button type="button" class="next-button">Next</button>
        </div>

        <!-- Step 2: Address Form -->
        <div class="form-step">
        <div class="input-field">
            <label>Address # *</label>
            <input type="text" name="address_number" required>
        </div>

        <div class="input-field">
            <label>Barangay *</label>
            <input type="text" name="barangay" required>
        </div>

        <div class="input-field">
            <label>Municipality / City *</label>
            <input type="text" name="city" required>
        </div>

        <div class="input-field">
            <label>Region *</label>
            <select name="region" required>
                <option disabled selected></option>
                <option>NCR</option>
                <option>Region I</option>
                <option>Region II</option>
                <option>Region III</option>
            </select>
        </div>

        <!-- Back and Submit buttons -->
        <button type="button" class="back-button">Back</button>
        <button type="submit">Submit</button>
    </div>
</form>

</div>


                    


            <div class="form third">
                <!-- ikaw na mag lagay dito copy mo nalang yung mga nasa taas -->

            </div>
        </form>
    </div>


    <footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo">
                <img src="">
            </div>
            <p>
            BESTLINK COLLEGE OF THE PHILIPPINES
            </p>
            <div class="socials">
                <a href="#"><i class="ri-facebook-line"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-line"></i></a>
            </div>
        </div>
        <div class="column">
            <h4>About Us</h4>
            <a href="#">Blogs</a>
            <a href="#">Channels</a>
            <a href="#">Sponsors</a>
        </div>
    </footer>

    <div class="copyright">
       <!-- lagyan -->
    </div>

    <script src=proceed.js></script>
    <script>
        function scrollToElement(elementSelector, instance = 0) {
    // Select all elements that match the given selector
    const elements = document.querySelectorAll(elementSelector);
    // Check if there are elements matching the selector and if the requested instance exists
    if (elements.length > instance) {
        // Scroll to the specified instance of the element
        elements[instance].scrollIntoView({ behavior: 'smooth' });
    }
}

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");

link1.addEventListener('click', () => {
    scrollToElement('.header');
});

link2.addEventListener('click', () => {
    // Scroll to the second element with "header" class
    scrollToElement('.header', 1);
});

link3.addEventListener('click', () => {
    scrollToElement('.column');
});

const form = document.querySelector("form"),
        nextbutton = form.querySelector(".nextbutton"),
        backbutton = form.querySelector(".backbutton"),
        allInput = form.querySelectorAll(".one input");
        nextbutton.addEventListener("click", ()=> {
            allInput.forEach(input => {
                if(input.value != ""){
                    form.classList.add('secActive');
                }else{
                    form.classList.remove('secActive');
                }
            })
        })

        backbutton.addEventListener("click", () => form.classList.remove('secActive'));

    </script>
</body>

</html>
