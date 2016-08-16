<?php		
use Illuminate\Database\Schema\Blueprint;		
use Illuminate\Database\Migrations\Migration;		

class CreateUserProfileTable extends Migration		
{		
    public function up()		
    {		
    }		

    public function down()		
    {		
        Schema::dropIfExists('user_profiles');		
    }		
}