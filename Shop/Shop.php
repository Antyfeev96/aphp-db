<?php
declare(strict_types=1);
namespace Shop;
use DatabaseWrapper\DatabaseWrapper;
class Shop implements DatabaseWrapper
{
  // вставляет новую запись в таблицу, возвращает полученный объект как массив
  public function insert(array $tableColumns, array $values): array
  {

  }
  // редактирует строку под конкретным id, возвращает результат после изменения
  public function update(int $id, array $values): array
  {

  }
  // поиск по id
  public function find(int $id): array
  {

  }
  // удаление по id
  public function delete(int $id): bool
  {

  }
}