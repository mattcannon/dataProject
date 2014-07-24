<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        $file = base_path().'/data.csv';
        $fh = fopen($file,'r+');
        $data = [];
        while($row = fgetcsv($fh)){
            $data[] = $row;
//            Data::create($row);
        }
        fclose($fh);
        array_shift($data);
        $headers = [
            "parent_department",
            "organisation",
            "unit",
            "reporting_senior_post",
            "grade",
            "payscale_minimum",
            "payscale_maximum",
            "generic_job_title",
            "posts_in_fte",
            "profession"
        ];
        foreach($data as $k => $v){
            $data[$k] = array_combine($headers,$v);
        }
        foreach($data as $value){
            Data::create($value);
        }
		// $this->call('UserTableSeeder');
	}

}
