function zodiac() {
    var birthdate = new Date(document.getElementById("birthdate").value);
    var month = birthdate.getMonth() + 1; // Adding 1 because getMonth() returns 0-based index
    var day = birthdate.getDate();

    if ((month == 3 && day >= 21) || (month == 4 && day <= 19)) {
        document.getElementById('zodiac_sign').src = "aries.png";
        document.getElementById('zodiacname').textContent = "Aries";
        document.getElementById('result').textContent = "In 2024, you'll experience a broadening of your social circle and a refreshing transformation in your professional and creative endeavors. As Mars, your ruling planet, enters retrograde, be prepared for its impact on your sex life and career. Saturn spends the entire year in your 12th House of the Unconscious, guiding you to deepen your spiritual journey, whether that's through tarot, ancestor worship, or other explorations. Look forward to enhanced fulfillment at work and a boost in recognition. Be ready for a chaotic eclipse in your sign, Aries and ruling planet, Mars, going retrograde towards the year's end, affecting both your personal and professional life.";
    } else if ((month == 4 && day >= 20) || (month == 5 && day <= 20)) {
        document.getElementById('zodiac_sign').src = "taurus.png";
        document.getElementById('zodiacname').textContent = "Taurus";
        document.getElementById('result').textContent = "This year brings the unexpected, with Uranus remaining in your sign until July 2025. Having entered Taurus in March 2019, Uranus introduces elements of surprise and unpredictability, which can be challenging for your earthy, stable nature. Expect the unexpected, particularly as Uranus undergoes two retrogrades. These phases prompt internal shifts, prompting you to reconsider what you want in relationships, self-care routines, or career paths. However, Venus, your ruling planet and the symbol of love, beauty, and wealth, does not enter retrograde this year. This is great news, as Venus retrograde often leads to relationship tensions and financial slowdowns and advises against significant changes in appearance. Thankfully, you won’t face these issues in 2024.";
    } else if ((month == 5 && day >= 21) || (month == 6 && day <= 20)) {
        document.getElementById('zodiac_sign').src = "gemini.png";
        document.getElementById('zodiacname').textContent = "Gemini";
        document.getElementById('result').textContent = "2024 promises to be a significant change for you, but autumn is the most transformative time. These months mark the realization of goals you've been striving towards during the earlier part of the year. As the year winds down in late November and December, take time to relax and appreciate your achievements, enjoying a well-deserved break over the holiday season. Mercury, your ruling planet and the messenger of the gods undergoes its usual retrograde cycles this year. These phases might affect you more intensely. The year starts positively as Mercury retrograde ends on New Year's Day, setting the stage for a productive return to work. However, be prepared for the common inconveniences of Mercury retrograde, including the return of exes scattered throughout the year.";
    } else if ((month == 6 && day >= 21) || (month == 7 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "cancer.png";
        document.getElementById('zodiacname').textContent = "Cancer";
        document.getElementById('result').textContent = "This year, Pluto, the planet symbolizing death and rebirth, influences major aspects of love and relationships. Pluto moves into your 8th House of Sex, inviting you to explore new realms of sensuality, whether that means pausing dating, embracing sexual fluidity, or delving into kink and fantasy. Then, Pluto shifts into your 7th House of Partnership, heralding significant but positive changes in your closest relationships. It then returns to Aquarius, allowing you to end the year with a focus on deep, sensual love. Because your ruling planet is the moon, the lunar eclipses may impact you more intensely than others. These eclipses could leave you feeling drained, so prioritize self-care, particularly rest, during these times. Opt for quiet evenings chilling solo or with trusted friends.";
    } else if ((month == 7 && day >= 23) || (month == 8 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "leo.png";
        document.getElementById('zodiacname').textContent = "Leo";
        document.getElementById('result').textContent = "Leo, your 2024 horoscope is a journey through professional and personal transformations. The year kicks off with Uranus retrograde influencing your 10th House of Social Status, a phase that is crucial for reshaping your professional image. Pluto's transit in 2024 underscores important changes in your relationships and health. The year puts a spotlight on self-care, with an emphasis on solar eclipses, as you're ruled by the sun. While eclipses often bring upheavals, for you, Leo, 2024 is a time of notable shifts in your social life, urging you to find a balance between work and personal life. End the year by treating yourself to a makeover.";
    } else if ((month == 8 && day >= 23) || (month == 9 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "virgo.png";
        document.getElementById('zodiacname').textContent = "Virgo";
        document.getElementById('result').textContent = "In 2024, your confidence will reach new heights. The year starts with Pluto moving into your 6th House of Health, a transition ideal for revitalizing your wellness and beauty routines. Consider experimenting with a bold new hairstyle or striking eye makeup. As your ruling planet, Mercury's retrogrades in 2024 may hit closer to home. The year begins with Mercury retrograde ending on New Year's Day, paving the way for a productive start as work routines kick back into gear. Yet, be prepared for typical Mercury retrograde challenges like travel delays and communication mix-ups later in the year. While they may bring some disruptions, they also offer chances for introspection and progress.";
    } else if ((month == 9 && day >= 23) || (month == 10 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "libra.png";
        document.getElementById('zodiacname').textContent = "Libra";
        document.getElementById('result').textContent = "2024 features two intense eclipses in your sign, which may stir feelings of anxiety and require extra self-care. However, there's a silver lining: Venus, your ruling planet, remains direct all year. When Venus is retrograde, love tends to feel sluggish, money matters slow down, and major changes in appearance are usually discouraged. But in 2024, you're free to indulge in as many makeovers as you desire. A new moon in Cancer brings unexpected opportunities and perhaps recognition in your career, though not always in the ways you might expect. The arrival of Mars in your 5th House of Pleasure creates the perfect romantic setting for Valentine's Day, whether you opt for a cozy night in or a lively evening out. ";
    } else if ((month == 10 && day >= 23) || (month == 11 && day <= 21)) {
        document.getElementById('zodiac_sign').src = "scorpio.png";
        document.getElementById('zodiacname').textContent = "Scorpio";
        document.getElementById('result').textContent = "2024 is a year guided by introspection and transformative shifts, influenced by the retrogrades of both of your ruling planets, Mars and Pluto. Pluto retrograde emphasizes the importance of self-care, urging you to focus on nurturing yourself as a critical aspect of your well-being. As 2024 nears its end, Mars starts its retrograde, also encouraging you to slow down and reduce stress, particularly as the holiday season approaches. Your ambitious nature might resist this change, but remember that rest is vital for long-term productivity and health. This year isn’t about a pedal-to-the-metal attitude leading to burnout. Instead, it’s about finding an equilibrium between active passion and moments of calm.";
    } else if ((month == 11 && day >= 22) || (month == 12 && day <= 21)) {
        document.getElementById('zodiac_sign').src = "sagittarius.png";
        document.getElementById('zodiacname').textContent = "Sagittarius";
        document.getElementById('result').textContent = "Spring ushers in a romantic period, heightened during Gemini season with its flirty floral essence. However, the year also suggests stress with two eclipses that potentially disrupt friendships with sudden changes and heightened emotions. Your straightforwardness, while valued, may come off as harsh during these times, so bite your tongue to avoid conflict. Come fall, Jupiter, your ruling planet, goes retrograde, urging a focus on self-care and indulgence in luxurious wellness rituals. Unlike Jupiter, Venus doesn’t retrograde this year, offering freedom to explore new styles and bold makeup choices. This year is perfect for experimenting with your appearance, even if known for a signature look. ";
    } else if ((month == 12 && day >= 22) || (month == 1 && day <= 19)) {
        document.getElementById('zodiac_sign').src = "capricorn.png";
        document.getElementById('zodiacname').textContent = "Capricorn";
        document.getElementById('result').textContent = "2024 emphasizes self-discovery. Expansive Jupiter enters your 6th House of Health, fueling your resolve to conquer fears or vices. Harness your signature strength, sea-goat, to overcome obstacles in your way of growth. Saturn, your ruling planet, retrogrades, prompting introspection, especially in relationships. The year also brings two full moons in your sign, unveiling truths in romantic ties. Romance is further highlighted as Venus enters Capricorn twice. These periods indicate harmony in love, easing Saturn retrograde's often strict ";
    } else if ((month == 1 && day >= 20) || (month == 2 && day <= 18)) {
        document.getElementById('zodiac_sign').src = "aquarius.png";
        document.getElementById('zodiacname').textContent = "Aquarius";
        document.getElementById('result').textContent = "Aquarius, your 2024 horoscope centers on finding equilibrium in your life, from deepening personal relationships to advancing your career and prioritizing self-care. The year begins with a significant shift as Uranus, your ruling planet, goes direct, encouraging impactful changes in your home life and inner growth. The transformation continues as Uranus retrogrades again from Sunday, September 1, suggesting more evolution in your domestic sphere. In relationships, 2024 challenges you to balance your valued independence with forming deeper emotional bonds, exploring love in both physical and emotional dimensions while remaining true to your essence. Professionally, the year is shaped by self-assertion and your worth being valued. ";
    } else if ((month == 2 && day >= 19) || (month == 3 && day <= 20)) {
        document.getElementById('zodiac_sign').src = "pisces.png";
        document.getElementById('zodiacname').textContent = "Pisces";
        document.getElementById('result').textContent = "Prepare for a year marked by transformative eclipses and a crucial retrograde of your ruling planet, Neptune, emphasizing the need for self-care. The year's first major lunar eclipse affects your 8th House of Sex, bringing rapid changes in your intimate life, especially in areas you've been hesitant to address. Then, another lunar eclipse in Pisces signals a profound, lasting transformation in your personal journey. This year encourages you to explore both the sweet and passionate aspects of your relationships. And despite the allure of romance, it's vital to stay focused on your career and creative goals. Amidst the emotional depths of love, don't lose sight of the professional opportunities 2024 offers. ";
    } else {
        alert("Please enter the accurate date");
    }
}




// JavaScript to set the min and max date for the input field and call the zodiac function
window.onload = function() {
    var today = new Date();
    var month = today.getMonth() + 1; // Adding 1 because getMonth() returns 0-based index
    var day = today.getDate();

    // Set the minimum date to January 1st of the current year
    var minDate = today.getFullYear() + "-01-01";
    // Set the maximum date to December 31st of the current year
    var maxDate = today.getFullYear() + "-12-31";

    // Set the min and max attributes of the input field
    document.getElementById("birthdate").setAttribute("min", minDate);
    document.getElementById("birthdate").setAttribute("max", maxDate);

    // Call the zodiac function
    zodiac();
};
