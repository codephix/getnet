<?php

namespace CodePhix\GetNet;

use CodePhix\GetNet\Assinatura;
use CodePhix\GetNet\Cliente;
use CodePhix\GetNet\Cobranca;
use CodePhix\GetNet\Notificacao;
use CodePhix\GetNet\Transferencia;
use CodePhix\GetNet\Webhook;

class GetNet {
    
    public $cobranca;
    public $notificacao;
    public $transferencia;
    public $webhook;
    
    public function __construct($token, $status = false) {
        $connection = new Connection($token, ((!empty($status)) ? $status : 'producao'));

        $this->cobranca    = new Cobranca($connection);
        $this->notificacao = new Notificacao($connection);
        $this->transferencia = new Transferencia($connection);
        $this->webhook     = new Webhook($connection);
    }
}
