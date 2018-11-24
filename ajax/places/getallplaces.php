<?php namespace Petrenko\ArNav\Ajax\Places;

class GetAllPlaces
{
	public static function run()
	{
		$places = [
			[
				'id' => 1,
				'name' => 'Кафедра ПОАС',
				'description' => 'Этаж кафедры ПОАС. Учебно-лабораторный корпус "В". 9 этаж.',
				'image' => 'https://source.unsplash.com/random/400x400?sig=' . rand(1, 1000),
			],
			[
				'id' => 2,
				'name' => 'Кафедра ЭВМ',
				'description' => 'Этаж кафедры ЭВМ. Учебно-лабораторный корпус "В". 12 этаж.',
				'image' => 'https://source.unsplash.com/random/400x400?sig=' . rand(1, 1000),
			],
			[
				'id' => 3,
				'name' => 'Кафедра САПР',
				'description' => 'Этаж кафедры САПРиПК. Учебно-лабораторный корпус "В". 14 этаж.',
				'image' => 'https://source.unsplash.com/random/400x400?sig=' . rand(1, 1000),
			],
		];

		$jsonPlaces = json_encode($places);

		echo $jsonPlaces;
	}
}

