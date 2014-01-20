<?php
class Migration_Create_game extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'gameId' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '750',
			),
			'requirements' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
			'compatibility' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
			'price' => array(
				'type' => 'VARCHAR',
				'constraint' => '8',
			),
		));
		$this-dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('games');
	}

	public function down()
	{
		$this->dbforge->drop_table('games');
	}
?>