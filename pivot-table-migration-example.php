<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotTableMigrationExample extends Migration
{
  /**
   * Many to Many Pivot Table.
   * @return void
   */
  public function up()
  {
    Schema::create('blog_tag', function(Blueprint $table) {
      $table->integer('blog_id')->unsigned();
      $table->integer('tag_id')->unsigned();

      $table->foreign('blog_id')->references('id')->on('blogs');
      $table->foreign('tag_id')->references('id')->on('tags');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropTable('blog_tag');
  }
}
