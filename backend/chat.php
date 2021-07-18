<?php
    class Chat{
        
        // Appel la méthode decode() 
        public function getMessage()
        {
            return $this->decode();
        }   
        
        public function setMessage($message, $pseudo): void 
        {
            $json = $this->decode(); // On décode le fichier.json 
            // On ajoute les nouvelles données dans le tableau chat du json
            array_push($json['chat'], [
                "pseudo" => $pseudo, 
                "message" => $message, 
                "date" => date('d/m/Y H:i')
            ]);
            // On insere dans le fichier json 
            $str = json_encode($json, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
            file_put_contents(__DIR__.'/../data/chat.json', $str);
        }

        // Decode du fichier json pour recuperer le content
        private function decode()
        {
            return json_decode(file_get_contents(__DIR__.'/../data/chat.json'), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
        }
        

    }