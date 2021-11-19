<?php

namespace App\Http\Controllers;

use App\Http\Services\UpdateArticleComponent;

class ModalParticleController
{
    protected $update;
    protected $requestData;
    public function __construct(UpdateArticleComponent $updateArticleComponent) {
        $this->requestData = request()->all();
        $this->update = $updateArticleComponent;
    }
    public function insert() {
        $insertResult = $this->update->insert("modal_particle",explode(",",$this->requestData["content"]));
        if($insertResult) {
            return json_encode(["status" => 200,"message" => "成功","data" => true],JSON_UNESCAPED_UNICODE);
        }
    }
}
