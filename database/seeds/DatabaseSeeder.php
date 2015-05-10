<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use EmoFoodie\User;
use EmoFoodie\Log;
use EmoFoodie\Food;
use EmoFoodie\Emotion;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('FoodTableSeeder');
        $this->command->info('Food table seeded!');

        $this->call('EmotionTableSeeder');
        $this->command->info('Emotion table seeded!');

        $this->call('LogTableSeeder');
        $this->command->info('Log table seeded!');
	}

}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = User::create([
            'name'     => 'Roxie',
            'email'    => 'roxie@boomchinchilla.com',
            'password' => Hash::make('secret')
        ]);

		global $dbdata;

		$dbdata = ['user_id' => $user->id];
    }
}

class FoodTableSeeder extends Seeder
{
	public function run()
	{
		global $dbdata;

        DB::table('foods')->delete();

		// 0
		$food = Food::create([
			'user_id' => $dbdata['user_id'],
			'food'    => 'cake'
		]);
		$dbdata['food'][] = $food->id;

		// 1
		$food = Food::create([
			'user_id' => $dbdata['user_id'],
			'food'    => 'bacon'
		]);
		$dbdata['food'][] = $food->id;

		// 2
		$food = Food::create([
			'user_id' => $dbdata['user_id'],
			'food'    => 'cheese'
		]);
		$dbdata['food'][] = $food->id;

		// 3
		$food = Food::create([
			'user_id' => $dbdata['user_id'],
			'food'    => 'white bread'
		]);
		$dbdata['food'][] = $food->id;

		// 4
		$food = Food::create([
			'user_id' => $dbdata['user_id'],
			'food'    => 'Fruit & Fibre'
		]);
		$dbdata['food'][] = $food->id;

		// 5
		$food = Food::create([
			'user_id' => $dbdata['user_id'],
			'food'    => 'semi-skimmed milk'
		]);
		$dbdata['food'][] = $food->id;
	}
}

class EmotionTableSeeder extends Seeder
{
	public function run()
	{
		global $dbdata;

        DB::table('emotions')->delete();

		// 0
		$emo = Emotion::create([
			'user_id' => $dbdata['user_id'],
			'emotion' => 'bloated'
		]);
		$dbdata['emo'][] = $emo->id;

		// 1
		$emo = Emotion::create([
			'user_id' => $dbdata['user_id'],
			'emotion' => 'good'
		]);
		$dbdata['emo'][] = $emo->id;

		// 2
		$emo = Emotion::create([
			'user_id' => $dbdata['user_id'],
			'emotion' => 'attacking'
		]);
		$dbdata['emo'][] = $emo->id;

		// 3
		$emo = Emotion::create([
			'user_id' => $dbdata['user_id'],
			'emotion' => 'upset'
		]);
		$dbdata['emo'][] = $emo->id;
	}
}

class LogTableSeeder extends Seeder
{
	public function run()
	{
		global $dbdata;

        DB::table('logs')->delete();
        DB::table('food_log')->delete();
        DB::table('emotion_log')->delete();

		$log = Log::create([
			'user_id'  => $dbdata['user_id'],
			'note'     => '',
			'actioned' => $this->rand_time(),
		]);
		DB::table('food_log')->insert([
			'food_id' => $dbdata['food'][0],
			'log_id'  => $log->id
		]);
		DB::table('emotion_log')->insert([
			'emotion_id' => $dbdata['emo'][1],
			'log_id'     => $log->id
		]);

		$log = Log::create([
			'user_id'  => $dbdata['user_id'],
			'note'     => 'Slept around 5 hours during the day',
			'actioned' => $this->rand_time()
		]);
		DB::table('food_log')->insert([
			'food_id' => $dbdata['food'][1],
			'log_id' => $log->id
		]);
		DB::table('food_log')->insert([
			'food_id' => $dbdata['food'][2],
			'log_id' => $log->id
		]);
		DB::table('food_log')->insert([
			'food_id' => $dbdata['food'][3],
			'log_id' => $log->id
		]);
		DB::table('emotion_log')->insert([
			'emotion_id' => $dbdata['emo'][0],
			'log_id' => $log->id
		]);

		$log = Log::create([
			'user_id'  => $dbdata['user_id'],
			'note'     => 'Out at friends place',
			'actioned' => $this->rand_time()
		]);
		DB::table('food_log')->insert([
			'food_id' => $dbdata['food'][4],
			'log_id'  => $log->id
		]);
		DB::table('food_log')->insert([
			'food_id' => $dbdata['food'][5],
			'log_id'  => $log->id
		]);
		DB::table('emotion_log')->insert([
			'emotion_id' => $dbdata['emo'][2],
			'log_id'     => $log->id
		]);
		DB::table('emotion_log')->insert([
			'emotion_id' => $dbdata['emo'][3],
			'log_id'     => $log->id
		]);
	}

	public function rand_time()
	{
		return time() + rand(-1000000, 1000000);
	}
}
