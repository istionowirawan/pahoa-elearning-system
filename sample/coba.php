<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/adm_guru/bootstrap-3.3.4/css/jquery.typeahead.css">

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="http://localhost/adm_guru/bootstrap-3.3.4/js/jquery.typeahead.js"></script>

</head>
<body>

<div style="width: 100%; max-width: 500px; margin: 0 auto;">

    <form id="" name="" action="">
        <div class="typeahead-container">
			<input id="q" name="q" class="form-control" type="search" placeholder="Search" autocomplete="off">
        </div>
    </form>

    <script>

        var data = {
            countries: ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
                "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
                "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
                "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
                "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
                "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
                "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
                "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
                "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
                "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
                "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
                "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
                "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
                "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
                "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"]
        };

        $('#q').typeahead({
            minLength: 1,
            order: "asc",
            groupMaxItem: 5,
            hint: true,
            selector: {
                filter: "input-group-btn",
                filterButton: "btn btn-default",
                dropdown: "dropdown-menu dropdown-menu-right",
                list: "dropdown-menu",
                hint: "form-control"
            },
            source: {
                country: {
                    data: data.countries
                }
            },
            debug: true
        });

    </script>

</div>

</body>
</html>