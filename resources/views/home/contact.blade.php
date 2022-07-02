<div id="contact" class="contact-container">
    <h2>Contact</h2>
    <p>Heb je vragen of wil je met mij samen werken? Stuur me gewoon een berichtje!</p>

    <div class="contact-form">
        <div class="contact-info">
            <h3>Contact informatie</h3>
            <p>Neem contact met mij op en ik zal proberen zo snel mogelijk te antwoorden.</p>

            <ul>
                <li><i class="fa-solid fa-phone"></i> <a href="tel:0489 03 44 93">0489 03 44 93</a></li>
                <li><i class="fa-solid fa-envelope"></i> <a href="mailto:irismaenhout@gmail.com">irismaenhout@gmail.com</a></li>
                <li><i class="fa-solid fa-location-dot"></i> Bauterstraat 29, 9870 Zulte</li>
            </ul>
        </div>

        <form action="{{route('contact.send')}}" method="post">
            <div class="flex">
                <div>
                    <label for="firstname">Voornaam</label>
                    <input type="text" name="firstname" id="firstname" required>
                </div>

                <div>
                    <label for="lastname">Achternaam</label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>

            </div>

            <div class="flex">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div>
                    <label for="phone-nr">Telefoonnummer (optioneel)</label>
                    <input type="tel" name="phone-nr" id="phone-nr">
                </div>


            </div>

            <label for="subject">onderwerp</label>
            <input type="text" name="subject" id="subject" required>

            <label for="message">Bericht</label>
            <textarea name="message" id="message" rows="10" required></textarea>

            <button type="submit" class="primary-btn">Verzenden</button>

        </form>
    </div>
</div>
