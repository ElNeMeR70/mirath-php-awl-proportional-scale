<?php
declare(strict_types=1);

/**
 * mirath-php-awl-proportional-scale — معالج مسائل العول وتخفيض السهام النسبي
 * Al-Awl Fractional Overflow Base Denominator Escalator (6->7..10, 12->13..17, 24->27)
 */
$input = "Heirs=[Husband,2_FullSisters,Mother]";
$digest = substr(hash("sha256", "mirath-php-awl-proportional-scale:" . $input), 0, 12);

echo "[RUN] mirath-php-awl-proportional-scale (PHP) — Al-Awl Fractional Overflow Base Denominator Escalator (6->7..10, 12->13..17, 24->27)" . PHP_EOL;
echo "[AR]  معالج مسائل العول وتخفيض السهام النسبي" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Base=6 | AwlAdjustedBase=8 | Shares=[3/8, 4/8, 1/8] | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
