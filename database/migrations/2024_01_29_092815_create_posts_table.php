<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('author_id');//Cette ligne crée une colonne author_id pour stocker l'identifiant de l'auteur du post.
            $table->foreign('author_id')->references('id')->on('users')->onDelete('restrict');// Cette ligne ajoute une clé étrangère à la colonne author_id, faisant référence à la colonne id de la table users. La clause onDelete('restrict') indique que si un utilisateur est supprimé, les articles qui lui sont associés ne seront pas supprimés, mais la suppression de l'utilisateur sera restreinte s'il y a des articles associés.
            $table->string('title');
            $table->string('slug')->unique();// lors de la création d'une nouvelle publication, vous pouvez générer automatiquement un "slug" à partir du titre de la publication, puis stocker ce "slug" dans la colonne slug de la table,
            $table->text('excerpt');//Cette ligne crée une colonne excerpt pour stocker un extrait du post.
            $table->longText('body');//Cette ligne crée une colonne body pour stocker le contenu principal du post
            $table->string('image')->nullable();//Cette ligne crée une colonne image pour stocker le chemin de l'image associée au post. La méthode ->nullable() indique que cette colonne peut être nulle.
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
