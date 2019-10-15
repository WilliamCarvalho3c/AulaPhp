<?php

// LC_ALL quer dizer, mude toda a configuração que eu tenho de localisaççao para portuges
// pt_BR pra geral
// padrao UTFpt_BR-utf-8
// padrao do windows portuguese
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");


echo ucwords(strftime("%A %e %B %Y  %H:%M:%S"));

?>