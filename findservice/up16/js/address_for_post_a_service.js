var divisionZilla = {};
divisionZilla["Dhaka"] = ["Dhaka", "Gazipur", "Kishoreganj", "Narayangonj"];
divisionZilla["Chittagong"] = ["Chittagong", "Comilla", "Feni","Chandpur","Brahmanbaria","Noakhali"];
divisionZilla["Rajshahi"] = ["Chapainawabganj", "Natore", "Pabna","Bogra"];
divisionZilla["Khulna"] = ["Jashore", "Khulna", "Chuadanga","Jinaidaha","Bagherhat"];
divisionZilla["Barishal"] = ["Barguna", "Barishal", "Bhola", "Jhalokathi", "Patuakhali", "Pirojpur"];
divisionZilla["Sylhet"] = ["Hobiganj", "Moulvibazar", "Sunamganj", "Sylhet"];
divisionZilla["Rangpur"] = ["Dinajpur", "Gaibandha", "Kurigram", "Lalmonirhat", "Nilphamari","Panchagarh","Rangpur","Thakurgaon"];

function ChangeDivisionList() {
    var divisionList = document.getElementById("division_1");
    var zillaList = document.getElementById("zilla_1");
    var selDivision = divisionList.options[divisionList.selectedIndex].value;
    while (zillaList.options.length) {
        zillaList.remove(0);
    }
    var t = divisionZilla[selDivision];
    if (t) {
        var i;
        for (i = 0; i < t.length; i++) {
            var t1 = new Option(t[i], i);
            zillaList.options.add(t1);
        }
    }
}




var divisionZilla2 = {};
divisionZilla2["Dhaka"] = ["Dhaka", "Gazipur", "Kishoreganj", "Narayangonj"];
divisionZilla2["Chittagong"] = ["Chittagong", "Comilla", "Feni","Chandpur","Brahmanbaria","Noakhali"];
divisionZilla2["Rajshahi"] = ["Chapainawabganj", "Natore", "Pabna","Bogra"];
divisionZilla2["Khulna"] = ["Jashore", "Khulna", "Chuadanga","Jinaidaha","Bagherhat"];
divisionZilla2["Barishal"] = ["Barguna", "Barishal", "Bhola", "Jhalokathi", "Patuakhali", "Pirojpur"];
divisionZilla2["Sylhet"] = ["Hobiganj", "Moulvibazar", "Sunamganj", "Sylhet"];
divisionZilla2["Rangpur"] = ["Dinajpur", "Gaibandha", "Kurigram", "Lalmonirhat", "Nilphamari","Panchagarh","Rangpur","Thakurgaon"];

function ChangeDivisionList2() {
    var divisionList2 = document.getElementById("division_2");
    var zillaList2 = document.getElementById("zilla_2");
    var selDivision2 = divisionList2.options[divisionList2.selectedIndex].value;
    while (zillaList2.options.length) {
        zillaList2.remove(0);
    }
    var t2 = divisionZilla2[selDivision2];
    if (t2) {
        var i;
        for (i = 0; i < t2.length; i++) {
            var t12 = new Option(t2[i], i);
            zillaList2.options.add(t12);
        }
    }
}