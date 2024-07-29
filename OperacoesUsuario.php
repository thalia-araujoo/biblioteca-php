<?php
interface OperacoesUsuario {
    public function loguin($senhaFornecida): bool;
    public function logout(): bool;
}
?>
