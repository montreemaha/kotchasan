<?php

namespace Kotchasan\Database;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-05-23 at 20:49:30.
 */
class SqlTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @var Sql
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Sql();
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {

  }

  /**
   * Generated from @assert ('U.id') [==] 'U.`id`'.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName()
  {

    $this->assertEquals(
      'U.`id`', \Kotchasan\Database\Sql::fieldName('U.id')
    );
  }

  /**
   * Generated from @assert ('U1.id') [==] 'U1.`id`'.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName2()
  {

    $this->assertEquals(
      'U1.`id`', \Kotchasan\Database\Sql::fieldName('U1.id')
    );
  }

  /**
   * Generated from @assert (field_name) [==] '`field_name`'.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName3()
  {

    $this->assertEquals(
      '`field_name`', \Kotchasan\Database\Sql::fieldName(field_name)
    );
  }

  /**
   * Generated from @assert ('table_name.field_name') [==] '`table_name`.`field_name`'.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName4()
  {

    $this->assertEquals(
      '`table_name`.`field_name`', \Kotchasan\Database\Sql::fieldName('table_name.field_name')
    );
  }

  /**
   * Generated from @assert ('`table_name`.`field_name`') [==] '`table_name`.`field_name`'.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName5()
  {

    $this->assertEquals(
      '`table_name`.`field_name`', \Kotchasan\Database\Sql::fieldName('`table_name`.`field_name`')
    );
  }

  /**
   * Generated from @assert ('table_name.`field_name`') [==] '`table_name`.`field_name`'.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName6()
  {

    $this->assertEquals(
      '`table_name`.`field_name`', \Kotchasan\Database\Sql::fieldName('table_name.`field_name`')
    );
  }

  /**
   * Generated from @assert ('`table_name`.field_name') [==] '`table_name`.`field_name`'.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName7()
  {

    $this->assertEquals(
      '`table_name`.`field_name`', \Kotchasan\Database\Sql::fieldName('`table_name`.field_name')
    );
  }

  /**
   * Generated from @assert ('0x64656') [==] "`0x64656`".
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName8()
  {

    $this->assertEquals(
      "`0x64656`", \Kotchasan\Database\Sql::fieldName('0x64656')
    );
  }

  /**
   * Generated from @assert (0x64656) [==] 411222.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName9()
  {

    $this->assertEquals(
      411222, \Kotchasan\Database\Sql::fieldName(0x64656)
    );
  }

  /**
   * Generated from @assert ('DATE(day)') [==] "'DATE(day)'".
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName10()
  {

    $this->assertEquals(
      "'DATE(day)'", \Kotchasan\Database\Sql::fieldName('DATE(day)')
    );
  }

  /**
   * Generated from @assert ('DROP table') [==] "'DROP table'".
   *
   * @covers Kotchasan\Database\Sql::fieldName
   */
  public function testFieldName11()
  {

    $this->assertEquals(
      "'DROP table'", \Kotchasan\Database\Sql::fieldName('DROP table')
    );
  }

  /**
   * Generated from @assert (array()) [throws] InvalidArgumentException.
   *
   * @covers Kotchasan\Database\Sql::fieldName
   * @expectedException InvalidArgumentException
   */
  public function testFieldName12()
  {

    \Kotchasan\Database\Sql::fieldName(array());
  }

  /**
   * Generated from @assert WHERE(1)->text() [==] "`id` = 1".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE()
  {

    $this->assertEquals(
      "`id` = 1", \Kotchasan\Database\Sql::WHERE(1)->text()
    );
  }

  /**
   * Generated from @assert WHERE('1')->text() [==] "`id` = '1'".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE2()
  {

    $this->assertEquals(
      "`id` = '1'", \Kotchasan\Database\Sql::WHERE('1')->text()
    );
  }

  /**
   * Generated from @assert WHERE(0.1)->text() [==] "`id` = 0.1".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE3()
  {

    $this->assertEquals(
      "`id` = 0.1", \Kotchasan\Database\Sql::WHERE(0.1)->text()
    );
  }

  /**
   * Generated from @assert WHERE('ทดสอบ')->text() [==] "`id` = 'ทดสอบ'".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE4()
  {

    $this->assertEquals(
      "`id` = 'ทดสอบ'", \Kotchasan\Database\Sql::WHERE('ทดสอบ')->text()
    );
  }

  /**
   * Generated from @assert WHERE(null)->text() [==] "`id` = NULL".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE5()
  {

    $this->assertEquals(
      "`id` = NULL", \Kotchasan\Database\Sql::WHERE(null)->text()
    );
  }

  /**
   * Generated from @assert WHERE(0x64656)->text() [==] "`id` = 411222".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE6()
  {

    $this->assertEquals(
      "`id` = 411222", \Kotchasan\Database\Sql::WHERE(0x64656)->text()
    );
  }

  /**
   * Generated from @assert WHERE('SELECT * FROM')->text() [==] "`id` = :id0".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE7()
  {

    $this->assertEquals(
      "`id` = :id0", \Kotchasan\Database\Sql::WHERE('SELECT * FROM')->text()
    );
  }

  /**
   * Generated from @assert WHERE(Sql::create('EXISTS SELECT FROM WHERE'))->text() [==] "EXISTS SELECT FROM WHERE".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE8()
  {

    $this->assertEquals(
      "EXISTS SELECT FROM WHERE", \Kotchasan\Database\Sql::WHERE(Sql::create('EXISTS SELECT FROM WHERE'))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array('id', '=', 1))->text() [==] "`id` = 1".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE9()
  {

    $this->assertEquals(
      "`id` = 1", \Kotchasan\Database\Sql::WHERE(array('id', '=', 1))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array('U.id', '2017-01-01 00:00:00'))->text() [==] "U.`id` = '2017-01-01 00:00:00'".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE10()
  {

    $this->assertEquals(
      "U.`id` = '2017-01-01 00:00:00'", \Kotchasan\Database\Sql::WHERE(array('U.id', '2017-01-01 00:00:00'))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array('id', 'IN', array(1, '2', null)))->text() [==] "`id` IN (1, '2', NULL)".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE11()
  {

    $this->assertEquals(
      "`id` IN (1, '2', NULL)", \Kotchasan\Database\Sql::WHERE(array('id', 'IN', array(1, '2', null)))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array('id', 'SELECT * FROM'))->text() [==] "`id` = :id0".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE12()
  {

    $this->assertEquals(
      "`id` = :id0", \Kotchasan\Database\Sql::WHERE(array('id', 'SELECT * FROM'))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array('U.`id`', 'NOT IN', Sql::create('SELECT * FROM')))->text() [==] "U.`id` NOT IN SELECT * FROM".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE13()
  {

    $this->assertEquals(
      "U.`id` NOT IN SELECT * FROM", \Kotchasan\Database\Sql::WHERE(array('U.`id`', 'NOT IN', Sql::create('SELECT * FROM')))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array(array('id', 'IN', array(1, '2', null))))->text() [==] "`id` IN (1, '2', NULL)".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE14()
  {

    $this->assertEquals(
      "`id` IN (1, '2', NULL)", \Kotchasan\Database\Sql::WHERE(array(array('id', 'IN', array(1, '2', null))))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array(array('U.id', 1), array('U.id', '!=', '1')))->text() [==] "U.`id` = 1 AND U.`id` != '1'".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE15()
  {

    $this->assertEquals(
      "U.`id` = 1 AND U.`id` != '1'", \Kotchasan\Database\Sql::WHERE(array(array('U.id', 1), array('U.id', '!=', '1')))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array(array(Sql::MONTH('create_date'), 1), array(Sql::YEAR('create_date'), 1)))->text() [==] "MONTH(`create_date`) = 1 AND YEAR(`create_date`) = 1".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE16()
  {

    $this->assertEquals(
      "MONTH(`create_date`) = 1 AND YEAR(`create_date`) = 1", \Kotchasan\Database\Sql::WHERE(array(array(Sql::MONTH('create_date'), 1), array(Sql::YEAR('create_date'), 1)))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array(array('id', array(1, 'a')), array('id', array('G.id', 'G.`id2`'))))->text() [==] "`id` IN (1, 'a') AND `id` IN (G.`id`, G.`id2`)".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE17()
  {

    $this->assertEquals(
      "`id` IN (1, 'a') AND `id` IN (G.`id`, G.`id2`)", \Kotchasan\Database\Sql::WHERE(array(array('id', array(1, 'a')), array('id', array('G.id', 'G.`id2`'))))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array(array('id', array('', 'th'))))->text() [==] "`id` IN ('', 'th')".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE18()
  {

    $this->assertEquals(
      "`id` IN ('', 'th')", \Kotchasan\Database\Sql::WHERE(array(array('id', array('', 'th'))))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array(Sql::YEAR('create_date'), Sql::YEAR('`create_date`')))->text() [==] "YEAR(`create_date`) = YEAR(`create_date`)".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE19()
  {

    $this->assertEquals(
      "YEAR(`create_date`) = YEAR(`create_date`)", \Kotchasan\Database\Sql::WHERE(array(Sql::YEAR('create_date'), Sql::YEAR('`create_date`')))->text()
    );
  }

  /**
   * Generated from @assert WHERE(array('ip', 'NOT IN', array('', '192.168.1.2')))->text() [==] "`ip` NOT IN ('', '192.168.1.2')".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE20()
  {

    $this->assertEquals(
      "`ip` NOT IN ('', '192.168.1.2')", \Kotchasan\Database\Sql::WHERE(array('ip', 'NOT IN', array('', '192.168.1.2')))->text()
    );
  }

  /**
   * Generated from @assert (array(1, 1))->text() [==] "1 = 1".
   *
   * @covers Kotchasan\Database\Sql::WHERE
   */
  public function testWHERE21()
  {

    $this->assertEquals(
      "1 = 1", \Kotchasan\Database\Sql::WHERE(array(1, 1))->text()
    );
  }

  /**
   * Generated from @assert ('id', 'ทดสอบ') [==] "'ทดสอบ'".
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue()
  {

    $this->assertEquals(
      "'ทดสอบ'", \Kotchasan\Database\Sql::quoteValue('id', 'ทดสอบ')
    );
  }

  /**
   * Generated from @assert ('id', 'test') [==] "'test'".
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue2()
  {

    $this->assertEquals(
      "'test'", \Kotchasan\Database\Sql::quoteValue('id', 'test')
    );
  }

  /**
   * Generated from @assert ('id', 'abcde012345') [==] "'abcde012345'".
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue3()
  {

    $this->assertEquals(
      "'abcde012345'", \Kotchasan\Database\Sql::quoteValue('id', 'abcde012345')
    );
  }

  /**
   * Generated from @assert ('id', 123456) [==] 123456.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue4()
  {

    $this->assertEquals(
      123456, \Kotchasan\Database\Sql::quoteValue('id', 123456)
    );
  }

  /**
   * Generated from @assert ('id', 0.1) [==] 0.1.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue5()
  {

    $this->assertEquals(
      0.1, \Kotchasan\Database\Sql::quoteValue('id', 0.1)
    );
  }

  /**
   * Generated from @assert ('id', null) [==] 'NULL'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue6()
  {

    $this->assertEquals(
      'NULL', \Kotchasan\Database\Sql::quoteValue('id', null)
    );
  }

  /**
   * Generated from @assert ('id', 'U.id') [==] "U.`id`".
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue7()
  {

    $this->assertEquals(
      "U.`id`", \Kotchasan\Database\Sql::quoteValue('id', 'U.id')
    );
  }

  /**
   * Generated from @assert ('id', 'U.`id`') [==] 'U.`id`'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue8()
  {

    $this->assertEquals(
      'U.`id`', \Kotchasan\Database\Sql::quoteValue('id', 'U.`id`')
    );
  }

  /**
   * Generated from @assert ('id', 'domain.tld') [==] "'domain.tld'".
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue9()
  {

    $this->assertEquals(
      "'domain.tld'", \Kotchasan\Database\Sql::quoteValue('id', 'domain.tld')
    );
  }

  /**
   * Generated from @assert ('id', 'table_name.`id`') [==] '`table_name`.`id`'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue10()
  {

    $this->assertEquals(
      '`table_name`.`id`', \Kotchasan\Database\Sql::quoteValue('id', 'table_name.`id`')
    );
  }

  /**
   * Generated from @assert ('id', '`table_name`.id') [==] '`table_name`.`id`'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue11()
  {

    $this->assertEquals(
      '`table_name`.`id`', \Kotchasan\Database\Sql::quoteValue('id', '`table_name`.id')
    );
  }

  /**
   * Generated from @assert ('id', '`table_name`.`id`') [==] '`table_name`.`id`'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue12()
  {

    $this->assertEquals(
      '`table_name`.`id`', \Kotchasan\Database\Sql::quoteValue('id', '`table_name`.`id`')
    );
  }

  /**
   * Generated from @assert ('id', 'INSERT INTO') [==] ':id0'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue13()
  {

    $this->assertEquals(
      ':id0', \Kotchasan\Database\Sql::quoteValue('id', 'INSERT INTO')
    );
  }

  /**
   * Generated from @assert ('id', array(1, '2', null)) [==] "(1, '2', NULL)".
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue14()
  {

    $this->assertEquals(
      "(1, '2', NULL)", \Kotchasan\Database\Sql::quoteValue('id', array(1, '2', null))
    );
  }

  /**
   * Generated from @assert ('id', '0x64656') [==] ':id0'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue15()
  {

    $this->assertEquals(
      ':id0', \Kotchasan\Database\Sql::quoteValue('id', '0x64656')
    );
  }

  /**
   * Generated from @assert ('id', 0x64656) [==] 411222.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue16()
  {

    $this->assertEquals(
      411222, \Kotchasan\Database\Sql::quoteValue('id', 0x64656)
    );
  }

  /**
   * Generated from @assert ('`table_name`.`id`', '0x64656') [==] ':tablenameid0'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue17()
  {

    $this->assertEquals(
      ':tablenameid0', \Kotchasan\Database\Sql::quoteValue('`table_name`.`id`', '0x64656')
    );
  }

  /**
   * Generated from @assert ('U1.`id`', '0x64656') [==] ':u1id0'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue18()
  {

    $this->assertEquals(
      ':u1id0', \Kotchasan\Database\Sql::quoteValue('U1.`id`', '0x64656')
    );
  }

  /**
   * Generated from @assert ('U.id', '0x64656') [==] ':uid0'.
   *
   * @covers Kotchasan\Database\Sql::quoteValue
   */
  public function testQuoteValue19()
  {

    $this->assertEquals(
      ':uid0', \Kotchasan\Database\Sql::quoteValue('U.id', '0x64656')
    );
  }

  /**
   * Generated from @assert ('id', '`world`')->text() [==] '(1 + IFNULL((SELECT MAX(`id`) FROM `world` AS X), 0))'.
   *
   * @covers Kotchasan\Database\Sql::NEXT
   */
  public function testNEXT()
  {

    $this->assertEquals(
      '(1 + IFNULL((SELECT MAX(`id`) FROM `world` AS X), 0))', \Kotchasan\Database\Sql::NEXT('id', '`world`')->text()
    );
  }

  /**
   * Generated from @assert ('id', '`world`', array(array('module_id', 'D.`id`')), 'next_id')->text() [==] '(1 + IFNULL((SELECT MAX(`id`) FROM `world` AS X WHERE `module_id` = D.`id`), 0)) AS `next_id`'.
   *
   * @covers Kotchasan\Database\Sql::NEXT
   */
  public function testNEXT2()
  {

    $this->assertEquals(
      '(1 + IFNULL((SELECT MAX(`id`) FROM `world` AS X WHERE `module_id` = D.`id`), 0)) AS `next_id`', \Kotchasan\Database\Sql::NEXT('id', '`world`', array(array('module_id', 'D.`id`')), 'next_id')->text()
    );
  }

  /**
   * Generated from @assert ('id', '`world`', array(array('module_id', 'D.`id`')), null)->text() [==] '(1 + IFNULL((SELECT MAX(`id`) FROM `world` AS X WHERE `module_id` = D.`id`), 0))'.
   *
   * @covers Kotchasan\Database\Sql::NEXT
   */
  public function testNEXT3()
  {

    $this->assertEquals(
      '(1 + IFNULL((SELECT MAX(`id`) FROM `world` AS X WHERE `module_id` = D.`id`), 0))', \Kotchasan\Database\Sql::NEXT('id', '`world`', array(array('module_id', 'D.`id`')), null)->text()
    );
  }

  /**
   * Generated from @assert ('id')->text() [==] 'SUM(`id`)'.
   *
   * @covers Kotchasan\Database\Sql::SUM
   */
  public function testSUM()
  {

    $this->assertEquals(
      'SUM(`id`)', \Kotchasan\Database\Sql::SUM('id')->text()
    );
  }

  /**
   * Generated from @assert ('table_name.`id`', 'id')->text() [==] 'SUM(`table_name`.`id`) AS `id`'.
   *
   * @covers Kotchasan\Database\Sql::SUM
   */
  public function testSUM2()
  {

    $this->assertEquals(
      'SUM(`table_name`.`id`) AS `id`', \Kotchasan\Database\Sql::SUM('table_name.`id`', 'id')->text()
    );
  }

  /**
   * Generated from @assert ('U.id', 'id', true)->text() [==] 'SUM(DISTINCT U.`id`) AS `id`'.
   *
   * @covers Kotchasan\Database\Sql::SUM
   */
  public function testSUM3()
  {

    $this->assertEquals(
      'SUM(DISTINCT U.`id`) AS `id`', \Kotchasan\Database\Sql::SUM('U.id', 'id', true)->text()
    );
  }

  /**
   * Generated from @assert ('U1.id', 'id', true)->text() [==] 'SUM(DISTINCT U1.`id`) AS `id`'.
   *
   * @covers Kotchasan\Database\Sql::SUM
   */
  public function testSUM4()
  {

    $this->assertEquals(
      'SUM(DISTINCT U1.`id`) AS `id`', \Kotchasan\Database\Sql::SUM('U1.id', 'id', true)->text()
    );
  }

  /**
   * Generated from @assert ('id')->text() [==] 'COUNT(`id`)'.
   *
   * @covers Kotchasan\Database\Sql::COUNT
   */
  public function testCOUNT()
  {

    $this->assertEquals(
      'COUNT(`id`)', \Kotchasan\Database\Sql::COUNT('id')->text()
    );
  }

  /**
   * Generated from @assert ('id')->text() [==] 'AVG(`id`)'.
   *
   * @covers Kotchasan\Database\Sql::AVG
   */
  public function testAVG()
  {

    $this->assertEquals(
      'AVG(`id`)', \Kotchasan\Database\Sql::AVG('id')->text()
    );
  }

  /**
   * Generated from @assert ('id')->text() [==] 'MIN(`id`)'.
   *
   * @covers Kotchasan\Database\Sql::MIN
   */
  public function testMIN()
  {

    $this->assertEquals(
      'MIN(`id`)', \Kotchasan\Database\Sql::MIN('id')->text()
    );
  }

  /**
   * Generated from @assert ('id')->text() [==] 'MAX(`id`)'.
   *
   * @covers Kotchasan\Database\Sql::MAX
   */
  public function testMAX()
  {

    $this->assertEquals(
      'MAX(`id`)', \Kotchasan\Database\Sql::MAX('id')->text()
    );
  }

  /**
   * Generated from @assert ('date')->text() [==] 'DAY(`date`)'.
   *
   * @covers Kotchasan\Database\Sql::DAY
   */
  public function testDAY()
  {

    $this->assertEquals(
      'DAY(`date`)', \Kotchasan\Database\Sql::DAY('date')->text()
    );
  }

  /**
   * Generated from @assert ('date', 'd')->text() [==] 'DAY(`date`) AS `d`'.
   *
   * @covers Kotchasan\Database\Sql::DAY
   */
  public function testDAY2()
  {

    $this->assertEquals(
      'DAY(`date`) AS `d`', \Kotchasan\Database\Sql::DAY('date', 'd')->text()
    );
  }

  /**
   * Generated from @assert ('date')->text() [==] 'MONTH(`date`)'.
   *
   * @covers Kotchasan\Database\Sql::MONTH
   */
  public function testMONTH()
  {

    $this->assertEquals(
      'MONTH(`date`)', \Kotchasan\Database\Sql::MONTH('date')->text()
    );
  }

  /**
   * Generated from @assert ('date', 'm')->text() [==] 'MONTH(`date`) AS `m`'.
   *
   * @covers Kotchasan\Database\Sql::MONTH
   */
  public function testMONTH2()
  {

    $this->assertEquals(
      'MONTH(`date`) AS `m`', \Kotchasan\Database\Sql::MONTH('date', 'm')->text()
    );
  }

  /**
   * Generated from @assert ('date')->text() [==] 'YEAR(`date`)'.
   *
   * @covers Kotchasan\Database\Sql::YEAR
   */
  public function testYEAR()
  {

    $this->assertEquals(
      'YEAR(`date`)', \Kotchasan\Database\Sql::YEAR('date')->text()
    );
  }

  /**
   * Generated from @assert ('date', 'y')->text() [==] 'YEAR(`date`) AS `y`'.
   *
   * @covers Kotchasan\Database\Sql::YEAR
   */
  public function testYEAR2()
  {

    $this->assertEquals(
      'YEAR(`date`) AS `y`', \Kotchasan\Database\Sql::YEAR('date', 'y')->text()
    );
  }

  /**
   * Generated from @assert ('create_date')->text() [==] 'DATE(`create_date`)'.
   *
   * @covers Kotchasan\Database\Sql::DATE
   */
  public function testDATE()
  {

    $this->assertEquals(
      'DATE(`create_date`)', \Kotchasan\Database\Sql::DATE('create_date')->text()
    );
  }

  /**
   * Generated from @assert ('create_date', 'date')->text() [==] 'DATE(`create_date`) AS `date`'.
   *
   * @covers Kotchasan\Database\Sql::DATE
   */
  public function testDATE2()
  {

    $this->assertEquals(
      'DATE(`create_date`) AS `date`', \Kotchasan\Database\Sql::DATE('create_date', 'date')->text()
    );
  }

  /**
   * Generated from @assert (Sql::NOW(), '%h:%i')->text() [==] "DATE_FORMAT(NOW(), '%h:%i')".
   *
   * @covers Kotchasan\Database\Sql::DATE_FORMAT
   */
  public function testDATE_FORMAT()
  {

    $this->assertEquals(
      "DATE_FORMAT(NOW(), '%h:%i')", \Kotchasan\Database\Sql::DATE_FORMAT(Sql::NOW(), '%h:%i')->text()
    );
  }

  /**
   * Generated from @assert ('create_date', '%Y-%m-%d', 'today')->text() [==] "DATE_FORMAT(`create_date`, '%Y-%m-%d') AS `today`".
   *
   * @covers Kotchasan\Database\Sql::DATE_FORMAT
   */
  public function testDATE_FORMAT2()
  {

    $this->assertEquals(
      "DATE_FORMAT(`create_date`, '%Y-%m-%d') AS `today`", \Kotchasan\Database\Sql::DATE_FORMAT('create_date', '%Y-%m-%d', 'today')->text()
    );
  }

  /**
   * Generated from @assert ('create_date', Sql::NOW())->text() [==] "DATEDIFF(`create_date`, NOW())".
   *
   * @covers Kotchasan\Database\Sql::DATEDIFF
   */
  public function testDATEDIFF()
  {

    $this->assertEquals(
      "DATEDIFF(`create_date`, NOW())", \Kotchasan\Database\Sql::DATEDIFF('create_date', Sql::NOW())->text()
    );
  }

  /**
   * Generated from @assert ('2017-04-04', 'create_date')->text() [==] "DATEDIFF('2017-04-04', `create_date`)".
   *
   * @covers Kotchasan\Database\Sql::DATEDIFF
   */
  public function testDATEDIFF2()
  {

    $this->assertEquals(
      "DATEDIFF('2017-04-04', `create_date`)", \Kotchasan\Database\Sql::DATEDIFF('2017-04-04', 'create_date')->text()
    );
  }

  /**
   * Generated from @assert (Sql::NOW(), 'Y-m-d')->text() [==] "FORMAT(NOW(), 'Y-m-d')".
   *
   * @covers Kotchasan\Database\Sql::FORMAT
   */
  public function testFORMAT()
  {

    $this->assertEquals(
      "FORMAT(NOW(), 'Y-m-d')", \Kotchasan\Database\Sql::FORMAT(Sql::NOW(), 'Y-m-d')->text()
    );
  }

  /**
   * Generated from @assert ('create_date', 'Y-m-d', 'today')->text() [==] "FORMAT(`create_date`, 'Y-m-d') AS `today`".
   *
   * @covers Kotchasan\Database\Sql::FORMAT
   */
  public function testFORMAT2()
  {

    $this->assertEquals(
      "FORMAT(`create_date`, 'Y-m-d') AS `today`", \Kotchasan\Database\Sql::FORMAT('create_date', 'Y-m-d', 'today')->text()
    );
  }

  /**
   * Generated from @assert ()->text() [==] 'RAND()'.
   *
   * @covers Kotchasan\Database\Sql::RAND
   */
  public function testRAND()
  {

    $this->assertEquals(
      'RAND()', \Kotchasan\Database\Sql::RAND()->text()
    );
  }

  /**
   * Generated from @assert ('id')->text() [==] 'RAND() AS `id`'.
   *
   * @covers Kotchasan\Database\Sql::RAND
   */
  public function testRAND2()
  {

    $this->assertEquals(
      'RAND() AS `id`', \Kotchasan\Database\Sql::RAND('id')->text()
    );
  }

  /**
   * Generated from @assert ()->text() [==] 'NOW()'.
   *
   * @covers Kotchasan\Database\Sql::NOW
   */
  public function testNOW()
  {

    $this->assertEquals(
      'NOW()', \Kotchasan\Database\Sql::NOW()->text()
    );
  }

  /**
   * Generated from @assert ('id')->text() [==] 'NOW() AS `id`'.
   *
   * @covers Kotchasan\Database\Sql::NOW
   */
  public function testNOW2()
  {

    $this->assertEquals(
      'NOW() AS `id`', \Kotchasan\Database\Sql::NOW('id')->text()
    );
  }

  /**
   * Generated from @assert (array('fname', 'lname'))->text() [==] "CONCAT(`fname`, `lname`)".
   *
   * @covers Kotchasan\Database\Sql::CONCAT
   */
  public function testCONCAT()
  {

    $this->assertEquals(
      "CONCAT(`fname`, `lname`)", \Kotchasan\Database\Sql::CONCAT(array('fname', 'lname'))->text()
    );
  }

  /**
   * Generated from @assert (array('U.fname', 'U.`lname`'), 'displayname')->text() [==] "CONCAT(U.`fname`, U.`lname`) AS `displayname`".
   *
   * @covers Kotchasan\Database\Sql::CONCAT
   */
  public function testCONCAT2()
  {

    $this->assertEquals(
      "CONCAT(U.`fname`, U.`lname`) AS `displayname`", \Kotchasan\Database\Sql::CONCAT(array('U.fname', 'U.`lname`'), 'displayname')->text()
    );
  }

  /**
   * Generated from @assert (array('fname', 'lname'), 'displayname', ' ')->text() [==] "CONCAT_WS(' ', `fname`, `lname`) AS `displayname`".
   *
   * @covers Kotchasan\Database\Sql::CONCAT
   */
  public function testCONCAT3()
  {

    $this->assertEquals(
      "CONCAT_WS(' ', `fname`, `lname`) AS `displayname`", \Kotchasan\Database\Sql::CONCAT(array('fname', 'lname'), 'displayname', ' ')->text()
    );
  }

  /**
   * Generated from @assert ('C.topic', 'topic', ', ')->text() [==] "GROUP_CONCAT(C.`topic` SEPARATOR ', ') AS `topic`".
   *
   * @covers Kotchasan\Database\Sql::GROUP_CONCAT
   */
  public function testGROUP_CONCAT()
  {

    $this->assertEquals(
      "GROUP_CONCAT(C.`topic` SEPARATOR ', ') AS `topic`", \Kotchasan\Database\Sql::GROUP_CONCAT('C.topic', 'topic', ', ')->text()
    );
  }

  /**
   * Generated from @assert ('find', 'C.`topic`')->text() [==] "LOCATE('find', C.`topic`)".
   *
   * @covers Kotchasan\Database\Sql::POSITION
   */
  public function testPOSITION()
  {

    $this->assertEquals(
      "LOCATE('find', C.`topic`)", \Kotchasan\Database\Sql::POSITION('find', 'C.`topic`')->text()
    );
  }

  /**
   * Generated from @assert ('create_date', 'U.create_date')->text() [==] "BETWEEN `create_date` AND U.`create_date`".
   *
   * @covers Kotchasan\Database\Sql::BETWEEN
   */
  public function testBETWEEN()
  {

    $this->assertEquals(
      "BETWEEN `create_date` AND U.`create_date`", \Kotchasan\Database\Sql::BETWEEN('create_date', 'U.create_date')->text()
    );
  }

  /**
   * Generated from @assert ('table_name.field_name', 'U.`create_date`')->text() [==] "BETWEEN `table_name`.`field_name` AND U.`create_date`".
   *
   * @covers Kotchasan\Database\Sql::BETWEEN
   */
  public function testBETWEEN2()
  {

    $this->assertEquals(
      "BETWEEN `table_name`.`field_name` AND U.`create_date`", \Kotchasan\Database\Sql::BETWEEN('table_name.field_name', 'U.`create_date`')->text()
    );
  }

  /**
   * Generated from @assert ('`database`.`table`', '12-1-1')->text() [==] "BETWEEN `database`.`table` AND '12-1-1'".
   *
   * @covers Kotchasan\Database\Sql::BETWEEN
   */
  public function testBETWEEN3()
  {

    $this->assertEquals(
      "BETWEEN `database`.`table` AND '12-1-1'", \Kotchasan\Database\Sql::BETWEEN('`database`.`table`', '12-1-1')->text()
    );
  }

  /**
   * @covers Kotchasan\Database\Sql::text
   * @todo   Implement testText().
   */
  public function testText()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Kotchasan\Database\Sql::getValues
   * @todo   Implement testGetValues().
   */
  public function testGetValues()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Kotchasan\Database\Sql::create
   * @todo   Implement testCreate().
   */
  public function testCreate()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Kotchasan\Database\Sql::strValue
   * @todo   Implement testStrValue().
   */
  public function testStrValue()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );
  }
}