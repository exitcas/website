<?php /* Redirect if accessed directly */
if (!isset($p)) { header("Location: /"); } ?>
<p><a href="https://pixabay.com/photos/capibara-rodent-pig-water-cabiai-2528359/" id="link" style="font-size:small"><?= $trans["bkg_src"]; ?></a></p>
</main>
<footer>
&copy;2021-23 Lucas
<button id="setBkg" onclick="setBkg()" style="float:right"><i class="fa fa-repeat"></i> <span id="sBtxt">Loading</span></button>
</footer>
<script src="/script.js"></script>
</body>
</html>
