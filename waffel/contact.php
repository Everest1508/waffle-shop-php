<?php include 'db.php'; ?>
<?php include 'header.php'; ?>

<main>
    <section class="contact-container">
        <h2 class="fade-in">Contact Us</h2>
        <p class="fade-in">We'd love to hear from you! Whether you have questions, feedback, or special requests, feel free to reach out.</p>
        
        <div class="contact-content">
            <!-- Contact Form -->
            <form action="send_message.php" method="POST" class="contact-form slide-in">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

                <button type="submit" class="btn bounce">Send Message</button>
            </form>

            <!-- Contact Details -->
            <div class="contact-details zoom-in">
                <h3>Our Contact Information</h3>
                <p><strong>📍 Address:</strong> 123 Waffle Street, Mumbai, India</p>
                <p><strong>📧 Email:</strong> support@waffleshop.com</p>
                <p><strong>📞 Phone:</strong> +91 98765 43210</p>
                <p><strong>🕒 Business Hours:</strong> Mon-Sun, 9 AM - 10 PM</p>

                <!-- Embedded Google Map -->
                <iframe class="map" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8450482390124!2d72.81944481489724!3d19.076089387090503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6309b8c5e4b%3A0x2828f32710d67e91!2sMumbai!5e0!3m2!1sen!2sin!4v1634123456789" 
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
