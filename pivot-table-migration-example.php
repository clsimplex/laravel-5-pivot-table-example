<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotTableMigrationExample extends Migration
{
  /**
   * Many to Many Pivot Table.
   *
   * This assumes two models. Blog and Tag.
   * Their database tables are "blogs" and "tags" respectively.
   *
   * Not included are any index(), or onDelete() calls.
   * You'll need to look into this yourself.
   *
   * This snippet exists to remind myself how to set it up.
   *
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
   * In this case, we simply drop the table.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropTable('blog_tag');
  }
}
