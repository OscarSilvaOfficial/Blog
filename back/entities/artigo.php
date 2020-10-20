<?php

class Artigo {
    public function getAll(){
        $artigos = [
            [
                'link' => 'growth-hacking.php',
                'titulo' => 'Funil Growth Hacking',
                'conteudo' => '
                        Lorem Ipsum é simplesmente uma simulação de texto da
                        indústria tipográfica e de impressos, e vem sendo utilizado
                        desde o século XVI, quando um impressor desconhecido pegou
                        uma bandeja de tipos e os embaralhou para fazer um livro de
                        modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos,
                        como também ao salto para a editoração eletrônica, permanecendo
                        essencialmente inalterado. Se popularizou na década de 60, quando
                        a Letraset lançou decalques contendo passagens de Lorem Ipsum,
                        e mais recentemente quando passou a ser integrado a softwares
                        de editoração eletrônica como Aldus PageMaker.
                        '
            ],
            [
                'link' => 'metodologia-agil.php',
                'titulo' => 'O que é Metodología Ágil',
                'conteudo' => '
                        Lorem Ipsum é simplesmente uma simulação de texto da
                        indústria tipográfica e de impressos, e vem sendo utilizado
                        desde o século XVI, quando um impressor desconhecido pegou
                        uma bandeja de tipos e os embaralhou para fazer um livro de
                        modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos,
                        como também ao salto para a editoração eletrônica, permanecendo
                        essencialmente inalterado. Se popularizou na década de 60, quando
                        a Letraset lançou decalques contendo passagens de Lorem Ipsum,
                        e mais recentemente quando passou a ser integrado a softwares
                        de editoração eletrônica como Aldus PageMaker.
                        '
            ],
            [
                'link' => 'spring.php',
                'titulo' => 'Primeiros Passos com Spring',
                'conteudo' => '
                        Lorem Ipsum é simplesmente uma simulação de texto da
                        indústria tipográfica e de impressos, e vem sendo utilizado
                        desde o século XVI, quando um impressor desconhecido pegou
                        uma bandeja de tipos e os embaralhou para fazer um livro de
                        modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos,
                        como também ao salto para a editoração eletrônica, permanecendo
                        essencialmente inalterado. Se popularizou na década de 60, quando
                        a Letraset lançou decalques contendo passagens de Lorem Ipsum,
                        e mais recentemente quando passou a ser integrado a softwares
                        de editoração eletrônica como Aldus PageMaker.
                        '
            ],
        ];

        return $artigos;
    }
}