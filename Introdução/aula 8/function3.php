<?php
function calcularTempoEmpresa($anoFundacao, $anoAtual){
    return $anoAtual - $anoFundacao;
}
echo "<strong> Tempo de Empresa: </strong>" . calcularTempoEmpresa(2010,2026);

?>
