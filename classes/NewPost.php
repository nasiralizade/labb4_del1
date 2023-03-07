<?php

include("guestbook.php");
class NewPost
{
    /**
     * @var array|mixed
     */
    private mixed $post = [];

    public function __construct()
    {
        if (file_exists( "tmp/data.txt" )) {//  om filen existerar hämta all inlägg och lägg i arrayen "post".
            $this->post = unserialize( file_get_contents( "tmp/data.txt" ) );
        } else print "filen existerar ej";
    }

    /**
     * @deprecated Lägger användarnamn, meddelandet och datum in arrayen och sedan lägger innehållet från medlemsarrayen serialiserat till textfilen.
     * @param $name
     * @param $message
     * @param $date
     * @return void
     */
    public function addPost($name, $message, $date): void
    {
        array_unshift( $this->post, new guestbook( $name, $message, $date ) );
        file_put_contents( "tmp/data.txt", serialize( $this->post ) ); //Lägger innehållet från medlemsarrayen serialiserat
    }

    /**
     * @param $index
     * @return void
     */
    public function delPost($index): void
    {
        unset( $this->post[$index] );
        //Lägger innehållet från medlemsarrayen serialiserat
        file_put_contents( "tmp/data.txt", serialize( $this->post ) );
    }

    /**
     * @return array|mixed
     */
    public function getPost(): mixed
    {
        return $this->post;
    }


}




