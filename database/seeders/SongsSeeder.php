<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            'songName' => 'Crying While You Are Dancing',
            'songDuration' => '03:21',
            'songLyrics' => "I don't wanna lie And you can't tell the truth, so It's over I don't love you anymore I needed you to pull me through But you don't care, you bring it right back to you The lonely nights inside my room You're at the bar, drinking 'til your liver's bruised Look at yourself in the mirror Distorted, but I see it clearer Life of the party when you're Crying while you're dancing Spinning in the backseat I guess you got what you want I guess it's not enough Crying while you're dancing You woke up in a stranger's bed And realize you're hanging by the thinnest thread Now you're coming down and falling fast Where you end up, you'll break like you are made of glass Look at yourself in the mirror Distorted, but I see that you're Crying while you're dancing Spinning in the backseat I guess you got what you want I guess it's not enough Crying while you're dancing Look at yourself in the mirror Distorted, but I see that you're Crying while you're dancing Spinning in the backseat I guess you got what you want I guess it's n",
            'user_id' => '1'
        ]);
        DB::table('songs')->insert([
            'songName' => 'Dark Sun',
            'songDuration' => '04:40',
            'songLyrics' => "You held your head up high 'til dying wasn't far away I saw you reaching out for another way to be saved I watched you cut through clouds when the color faded into grey We knew that it was time to go, the atmosphere was burning slow Oh, I can feel the cold night, cold night Eternally the sunlight, sunlight is fading away When there is nothing left to run from We watch it fade into a dark sun I float in shallow seas as the sky is turning emery The end of all is here and now The atmosphere is where we drown Oh, I can feel the cold night, cold night Eternally the sunlight, sunlight is fading away When there is nothing left to run from We watch it fade into a dark sun I want the world to know I'm buried in the memories We knew that it was time to go, the atmosphere was burning slow Oh, I can feel the cold night, cold night Eternally the sunlight, sunlight is fading away When there is nothing left to run from We watch it fade into a dark sun",
            'user_id' => '1'
        ]);
        DB::table('songs')->insert([
            'songName' => 'Salt',
            'songDuration' => '04:36',
            'songLyrics' => "I can never process What I'm feeling in my bones Like a sickness that I can't diagnose Some days I think I'm afraid of my shadow I show up to fight at all the wrong battles And I don't think my mind will be right 'til I Pour the salt into the wound Let the rain wash over you If everything I said was true Then why am I paralyzed? Watch the grass blow in the wind for the hell of it And sometimes I get so caught up that I forget That all of our words only mean what's behind them You can't throw gasoline on a fire And say you tried to put it out Pour the salt into the wound Let the rain wash over you If everything I said was true Then why am I? Hiding from the blinding lights I never had an alibi If everything I said was true Then why am I? Why am I still paralyzed? Why am I still paralyzed? Step back as the ashes rise Embers up toward the sky With all the things that I can't find Pour the salt into the wound Let the rain wash over you If everything I said was true Then why am I? Hiding from the blinding lights I never had an alibi If everything I said was true Then why am I? Why am I still paralyzed? Still paralyzed",
            'user_id' => '1'
        ]);
        DB::table('songs')->insert([
            'songName' => 'Watchtower',
            'songDuration' => '02:24',
            'songLyrics' => "I'm calling this an emergency And I can't seem to match the pace I'm beset by hate  Confined by contingencies Can't you see the sirens racing? Flashing though the night I'm staying up in my tower Kept in the corners away from you Took away all of my power Kept in the dark with everything to lose I'm off the streets But still in your heart I climbed the stairs And we grew apart How could I let you go? Time will tell I'm looking down east towards the sea Wondering what could've been you and me Flashing though the night I'm staying up in my tower Kept in the corners away from you Took away all of my power Kept in the dark with everything to lose With everything to lose I'm staying up in my tower Kept in the corners away from you In spite of your love I chose the distance In spite of your warmth I made it difficult I chose the distance I'm off the streets But still in your heart I climbed the stairs And we grew apart",
            'user_id' => '1'
        ]);
        DB::table('songs')->insert([
            'songName' => 'Chelsea Smile',
            'songDuration' => '05:03',
            'songLyrics' => "I've got a secret It's on the tip of my tongue, it's on the back of my lungs And I'm gonna keep it I know something you don't know It sits in silence, eats away at me It feeds like cancer, this guilt could fill a fucking sea Pulling teeth, wolves at my door Now falling and failing is all I know This disease is getting worse I counted my blessings, now I'll count this curse The only thing I really know, I can't sleep at night I'm buried and breathing in regret, yeah The only thing I really know, I can't sleep at night I'm buried and breathing in regret I've got a secret It's on the tip of my tongue, it's on the back of my lungs And I'm gonna keep it I know something you don't know I've got a secret It's on the tip of my tongue, it's on the back of my lungs And I'm gonna keep it I know something you don't know I may look happy, but honestly, dear The only way I'll really smile is if you cut me ear to ear I see the vultures, they watch me bleed They lick their lips, as all my shame spills out of me Repent, repent, the end is nigh Repent, repent, we're all gonna die Repent, repent, these secrets will kill us So get on your knees and pray for... Repent, repent, the end is nigh Repent, repent, we're all gonna die Repent, repent, these secrets will kill us So get on your knees and pray for forgiveness We all carry these things inside that no one else can see They hold us down like anchors, they drown us out at sea I look up to the sky, there may be nothing there to see But if I don't believe in him, why would he believe in me? Why would he believe in me? Why would he believe in me? Why would he believe in me? Why would he believe in me? I've got a secret It's on the tip of my tongue, it's on the back of my lungs And I'm gonna keep it I know something you don't know I've got a secret It's on the tip of my tongue, it's on the back of my lungs And I'm gonna keep it I know something you will never know You will never know I know something you don't know",
            'user_id' => '1'
        ]);
        DB::table('songs')->insert([
            'songName' => 'It Was Written In Blood',
            'songDuration' => '04:03',
            'songLyrics' => "Goodbye, my friend, goodbye, my love, you're in my heart It was preordained that we should part And be reunited by and by, united by and by Goodbye, no handshake to endure, now there's nothing It was written in blood, it was written in blood It was written in blood, oh, God, written in blood It was written in blood, it was written in blood Oh, my God, it was written in blood Let's have no sadness, furrowed brow There's nothing new in dying now Let's have no sadness, furrowed brow There's nothing new in dying now Though living is no newer, though living is no newer And it was written in blood It was written in blood, it was written in blood It was written in blood, oh, God, written in blood It was written in blood, it was written in blood Oh, my God, it was written in blood on a suicide note Like roses, we blossom then die Like roses, we blossom then die Like roses, we blossom then die We fall apart (Die) We fall apart, fall apart (Die) Like roses, we blossom then die Like roses, we blossom then die We fall apart We fall apart Like roses, we fall apart, fall apart Though living is no newer, though living is no newer It was written in blood, on a fucking suicide note The day before he died It was written in blood, it was written in blood It was written in blood, my God, written in blood It was written in blood, it was written in blood Oh, my God, it was written in blood Like roses, we blossom then die Like roses, we blossom then die We fall apart (Fall apart) We fall apart (Fall apart) Fall apart We fall Like roses Like roses Roses (Roses) Roses (Like roses) Like roses Like roses (Like roses)",
            'user_id' => '1'
        ]);
        \App\Models\Song::factory(5)->create();
    }
}
