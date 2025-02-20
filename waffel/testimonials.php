<?php include 'db.php'; ?>
<?php include 'header.php'; ?>

<main>
    <section class="testimonial-section">
        <h2 class="fade-in">Customer Testimonials</h2>
        <p class="fade-in">Our customers love our waffles! Read what they have to say.</p>

        <div class="testimonials">
            <?php
            // Array of sample testimonials
            $reviews = [
                ["name" => "Amit Sharma", "review" => "The waffles are crispy on the outside, soft inside, and taste absolutely amazing!"],
                ["name" => "Priya Patel", "review" => "Loved the chocolate-loaded waffle! Perfect balance of sweetness."],
                ["name" => "Rahul Verma", "review" => "The best waffle shop in town! Great flavors and quick service."],
                ["name" => "Sneha Iyer", "review" => "Tried the Belgian waffle and it was heavenly. Highly recommended!"],
                ["name" => "Vikram Singh", "review" => "Affordable and delicious! The caramel waffle was my favorite."],
                ["name" => "Ananya Das", "review" => "Perfect for a weekend treat. Loved the Nutella waffle!"],
                ["name" => "Rohan Joshi", "review" => "Fresh, hot, and super tasty! A must-try for waffle lovers."],
                ["name" => "Kavita Mehta", "review" => "Great texture and flavors. The blueberry waffle was fantastic."],
                ["name" => "Siddharth Nair", "review" => "I keep coming back for more! The Lotus Biscoff waffle is amazing."],
                ["name" => "Pooja Choudhary", "review" => "Friendly staff and mouth-watering waffles. The Oreo waffle was superb!"]
            ];

            // Display testimonials
            foreach ($reviews as $review) {
                echo "<div class='testimonial-card slide-in'>
                        <h3>{$review['name']}</h3>
                        <p>“{$review['review']}”</p>
                      </div>";
            }
            ?>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
