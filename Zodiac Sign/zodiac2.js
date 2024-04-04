function zodiac2() {
    var birthdate = new Date(document.getElementById("birthdate").value);
    var month = birthdate.getMonth() + 1; // Adding 1 because getMonth() returns 0-based index
    var day = birthdate.getDate();

    if ((month == 3 && day >= 21) || (month == 4 && day <= 19)) {
        document.getElementById('zodiac_sign').src = "aries.png";
        document.getElementById('zodiacname').textContent = "Aries";
       
    } else if ((month == 4 && day >= 20) || (month == 5 && day <= 20)) {
        document.getElementById('zodiac_sign').src = "taurus.png";
        document.getElementById('zodiacname').textContent = "Taurus";
       
    } else if ((month == 5 && day >= 21) || (month == 6 && day <= 20)) {
        document.getElementById('zodiac_sign').src = "gemini.png";
        document.getElementById('zodiacname').textContent = "Gemini";
       
    } else if ((month == 6 && day >= 21) || (month == 7 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "cancer.png";
        document.getElementById('zodiacname').textContent = "Cancer";
       
    } else if ((month == 7 && day >= 23) || (month == 8 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "leo.png";
        document.getElementById('zodiacname').textContent = "Leo";
       
    } else if ((month == 8 && day >= 23) || (month == 9 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "virgo.png";
        document.getElementById('zodiacname').textContent = "Virgo";
       
    } else if ((month == 9 && day >= 23) || (month == 10 && day <= 22)) {
        document.getElementById('zodiac_sign').src = "libra.png";
        document.getElementById('zodiacname').textContent = "Libra";
       
    } else if ((month == 10 && day >= 23) || (month == 11 && day <= 21)) {
        document.getElementById('zodiac_sign').src = "scorpio.png";
        document.getElementById('zodiacname').textContent = "Scorpio";
       
    } else if ((month == 11 && day >= 22) || (month == 12 && day <= 21)) {
        document.getElementById('zodiac_sign').src = "sagittarius.png";
        document.getElementById('zodiacname').textContent = "Sagittarius";
        
    } else if ((month == 12 && day >= 22) || (month == 1 && day <= 19)) {
        document.getElementById('zodiac_sign').src = "capricorn.png";
        document.getElementById('zodiacname').textContent = "Capricorn";
       
    } else if ((month == 1 && day >= 20) || (month == 2 && day <= 18)) {
        document.getElementById('zodiac_sign').src = "aquarius.png";
        document.getElementById('zodiacname').textContent = "Aquarius";
       
    } else if ((month == 2 && day >= 19) || (month == 3 && day <= 20)) {
        document.getElementById('zodiac_sign').src = "pisces.png";
        document.getElementById('zodiacname').textContent = "Pisces";
       
    } else {
        alert("Please enter the accurate date");
    }
}