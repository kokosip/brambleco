<?php
/* @var $installer Mage_Core_Model_Resource_Setup */

echo 'Testing our upgrade script (upgrade-0.1.0-0.2.0.php) and halting execution to avoid updating the system version number';

$installer = $this;

$installer->startSetup();

$installer->run("

INSERT INTO `contact_table` (`contact_id`, `created_at`, `name`, `email`, `telephone`, `comment`) 
VALUES 
('1', CURRENT_TIMESTAMP, 'Koko', 'kokosip77@gmail.com', '085743028438', 'Test 1'), 
('2', CURRENT_TIMESTAMP, 'Sip', 'sipsip@gmail.com', '084848484844', 'Test 2');

");

$installer->endSetup();