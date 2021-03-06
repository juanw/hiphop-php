<?php

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.countable.php )
 *
 * Classes implementing Countable can be used with the count() function.
 *
 */
interface Countable {
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/countable.count.php )
 *
 * This method is executed when using the count() function on an object
 * implementing Countable.
 *
 * @return     mixed   The custom count as an integer.
 *
 *                     The return value is cast to an integer.
 */
  public function count();
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.serializable.php )
 *
 * Interface for customized serializing.
 *
 * Classes that implement this interface no longer support __sleep() and
 * __wakeup(). The method serialize is called whenever an instance needs to
 * be serialized. This does not invoke __destruct() or has any other side
 * effect unless programmed inside the method. When the data is
 * unserialized the class is known and the appropriate unserialize() method
 * is called as a constructor instead of calling __construct(). If you need
 * to execute the standard constructor you may do so in the method.
 *
 */
interface Serializable {
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/serializable.serialize.php )
 *
 * Should return the string representation of the object.
 *
 * This method acts as the destructor of the object. The __destruct()
 * method will not be called after this method.
 *
 * @return     mixed   Returns the string representation of the object or
 *                     NULL
 */
  public function serialize();
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/serializable.unserialize.php )
 *
 * Called during unserialization of the object.
 *
 * This method acts as the constructor of the object. The __construct()
 * method will not be called after this method.
 *
 * @serialized mixed   The string representation of the object.
 *
 * @return     mixed   Returns the original value unserialized.
 */
  public function unserialize($serialized);
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.traversable.php )
 *
 * Interface to detect if a class is traversable using foreach.
 *
 * Abstract base interface that cannot be implemented alone. Instead it
 * must be implemented by either IteratorAggregate or Iterator.
 *
 * Internal (built-in) classes that implement this interface can be used
 * in a foreach construct and do not need to implement IteratorAggregate or
 * Iterator.
 *
 * This is an internal engine interface which cannot be implemented in PHP
 * scripts. Either IteratorAggregate or Iterator must be used instead.
 *
 */
interface Traversable {
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.iterator.php )
 *
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 *
 */
interface Iterator extends Traversable {
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/iterator.current.php )
 *
 * Returns the current element.
 *
 * @return     mixed   Can return any type.
 */
  public function current();
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/iterator.key.php )
 *
 * Returns the key of the current element.
 *
 * @return     mixed   Returns scalar on success, or NULL on failure.
 */
  public function key();
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/iterator.next.php )
 *
 * Moves the current position to the next element.
 *
 * This method is called after each foreach loop.
 *
 * @return     mixed   Any returned value is ignored.
 */
  public function next();
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/iterator.rewind.php )
 *
 * Rewinds back to the first element of the Iterator.
 *
 * This is the first method called when starting a foreach loop. It will
 * not be executed after foreach loops.
 *
 * @return     mixed   Any returned value is ignored.
 */
  public function rewind();
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/iterator.valid.php )
 *
 * This method is called after Iterator::rewind() and Iterator::next() to
 * check if the current position is valid.
 *
 * @return     mixed   The return value will be casted to boolean and then
 *                     evaluated. Returns TRUE on success or FALSE on
 *                     failure.
 */
  public function valid();
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.seekableiterator.php )
 *
 * The Seekable iterator.
 *
 */
interface SeekableIterator extends Iterator {
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/seekableiterator.seek.php )
 *
 * Seeks to a given position in the iterator.
 *
 * @position   mixed   The position to seek to.
 *
 * @return     mixed   No value is returned.
 */
  public function seek($position);
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.outeriterator.php )
 *
 * Classes implementing OuterIterator can be used to iterate over
 * iterators.
 *
 */
interface OuterIterator extends Iterator {
  public function getInnerIterator();
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.recursiveiterator.php )
 *
 * Classes implementing RecursiveIterator can be used to iterate over
 * iterators recursively.
 *
 */
interface RecursiveIterator extends Iterator {
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiterator.getchildren.php )
 *
 * Returns an iterator for the current iterator entry.
 *
 * @return     mixed   An iterator for the current entry.
 */
  public function getChildren();
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiterator.haschildren.php )
 *
 * Returns if an iterator can be created fot the current entry.
 * RecursiveIterator::getChildren().
 *
 * @return     mixed   Returns TRUE if the current entry can be iterated
 *                     over, otherwise returns FALSE.
 */
  public function hasChildren();
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/class.recursiveiteratoriterator.php )
 *
 * Can be used to iterate through recursive iterators.
 *
 */
class RecursiveIteratorIterator implements OuterIterator, Traversable {

  private $rsrc;

  const LEAVES_ONLY = 0;
  const SELF_FIRST = 1;
  const CHILD_FIRST = 2;
  const CATCH_GET_CHILD = 16;

  public function __construct($iterator,
                              $mode = RecursiveIteratorIterator::LEAVES_ONLY,
                              $flags = 0) {
    hphp_recursiveiteratoriterator___construct($this, $iterator, $mode, $flags);
  }
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
 * )
 *
 * Gets the current active sub iterator. WarningThis function is currently
 * not documented; only its argument list is available.
 *
 * @return     mixed   The current active sub iterator.
 */
  public function getInnerIterator() {
    return hphp_recursiveiteratoriterator_getinneriterator($this);
  }
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiteratoriterator.current.php )
 *
 *
 * @return     mixed   The current elements value.
 */
  public function current() {
    return hphp_recursiveiteratoriterator_current($this);
  }
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiteratoriterator.key.php )
 *
 *
 * @return     mixed   The current key.
 */
  public function key() {
    return hphp_recursiveiteratoriterator_key($this);
  }
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiteratoriterator.next.php )
 *
 *
 * @return     mixed   No value is returned.
 */
  public function next() {
    hphp_recursiveiteratoriterator_next($this);
  }
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiteratoriterator.rewind.php )
 *
 *
 * @return     mixed   No value is returned.
 */
  public function rewind() {
    hphp_recursiveiteratoriterator_rewind($this);
  }
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursiveiteratoriterator.valid.php )
 *
 *
 * @return     mixed   TRUE if the current position is valid, otherwise
 *                     FALSE
 */
  public function valid() {
    return hphp_recursiveiteratoriterator_valid($this);
  }
}

///////////////////////////////////////////////////////////////////////////////

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.arrayiterator.php )
 *
 * This iterator allows to unset and modify values and keys while
 * iterating over Arrays and Objects.
 *
 * When you want to iterate over the same array multiple times you need to
 * instantiate ArrayObject and let it create ArrayIterator instances that
 * refer to it either by using foreach or by calling its getIterator()
 * method manually.
 *
 */
class ArrayIterator implements ArrayAccess, SeekableIterator, Countable {
  protected $arr;
  protected $flags;

  const STD_PROP_LIST = 1;
  const ARRAY_AS_PROPS = 2;

  public function __construct($array, $flags = 0) {
    $this->arr = $array;
    $this->flags = $flags;
    reset($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.append.php )
 *
 * Appends value as the last element. WarningThis function is currently
 * not documented; only its argument list is available.
 *
 * @value      mixed   The value to append.
 *
 * @return     mixed   No value is returned.
 */
  public function append($value) {
    $this->arr[] = $value;
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.asort.php )
 *
 * Sorts an array by values. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @return     mixed   No value is returned.
 */
  public function asort() {
    asort($this->arr, $this->flags);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.count.php )
 *
 * Gets the number of elements in the array, or the number of public
 * properties in the object. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @return     mixed   The number.
 */
  public function count() {
    return count($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.current.php )
 *
 * Get the current array entry.
 *
 * @return     mixed   The current array entry.
 */
  public function current() {
    return current($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.getarraycopy.php )
 *
 * Get a copy of an array. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @return     mixed   A copy of the array, or array of public properties
 *                     if ArrayIterator refers to an object.
 */
  public function getArrayCopy() {
    return $this->arr;
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.getflags.php )
 *
 * Get the current flags. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @return     mixed   The current flags.
 */
  public function getFlags() {
    return $this->flags;
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.key.php )
 *
 * This function returns the current array key
 *
 * @return     mixed   The current array key.
 */
  public function key() {
    return key($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.ksort.php )
 *
 * Sorts an array by the keys. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @return     mixed   No value is returned.
 */
  public function ksort() {
    ksort($this->arr, $this->flags);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.natcasesort.php )
 *
 * Sort the entries by values using a case insensitive "natural order"
 * algorithm. WarningThis function is currently not documented; only its
 * argument list is available.
 *
 * @return     mixed   No value is returned.
 */
  public function natcasesort() {
    natcasesort($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.natsort.php )
 *
 * Sort the entries by values using "natural order" algorithm. WarningThis
 * function is currently not documented; only its argument list is
 * available.
 *
 * @return     mixed   No value is returned.
 */
  public function natsort() {
    natsort($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.next.php )
 *
 * The iterator to the next entry.
 *
 * @return     mixed   No value is returned.
 */
  public function next() {
    next($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.offsetexists.php )
 *
 * Checks if the offset exists. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @index      mixed   The offset being checked.
 *
 * @return     mixed   TRUE if the offset exists, otherwise FALSE
 */
  public function offsetExists($index) {
    return isset($this->arr[$index]);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.offsetget.php )
 *
 * Gets the value from the provided offset. WarningThis function is
 * currently not documented; only its argument list is available.
 *
 * @index      mixed   The offset to get the value from.
 *
 * @return     mixed   The value at offset index.
 */
  public function offsetGet($index) {
    return $this->arr[$index];
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.offsetset.php )
 *
 * Sets a value for a given offset. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @index      mixed   The index to set for.
 * @newval     mixed   The new value to store at the index.
 *
 * @return     mixed   No value is returned.
 */
  public function offsetSet($index, $newval) {
    $this->arr[$index] = $newval;
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.offsetunset.php )
 *
 * Unsets a value for an offset. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @index      mixed   The offset to unset.
 *
 * @return     mixed   No value is returned.
 */
  public function offsetUnset($index) {
    unset($this->arr[$index]);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.rewind.php )
 *
 * This rewinds the iterator to the beginning.
 *
 * @return     mixed   No value is returned.
 */
  public function rewind() {
    reset($this->arr);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.seek.php )
 *
 *
 * @position   mixed   The position to seek to.
 *
 * @return     mixed   No value is returned.
 */
  public function seek($position) {
    reset($this->arr);
    for ($i = 0; $i < $position; $i++) {
      if (!next($this->arr)) {
        break;
      }
    }
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.setflags.php )
 *
 * Sets behaviour flags. WarningThis function is currently not documented;
 * only its argument list is available.
 *
 * @flags      mixed   A bitmask as follows: 0 = Properties of the object
 *                     have their normal functionality when accessed as
 *                     list (var_dump, foreach, etc.). 1 = Array indices
 *                     can be accessed as properties in read/write.
 *
 * @return     mixed   No value is returned.
 */
  public function setFlags($flags) {
    $this->flags = $flags;
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.uasort.php )
 *
 * Sort the entries by values using user defined function. WarningThis
 * function is currently not documented; only its argument list is
 * available.
 *
 * @cmp_function
 *             mixed   The compare function used for the sort.
 *
 * @return     mixed   No value is returned.
 */
  public function uasort($cmp_function) {
    uasort($this->arr, $cmp_function);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.uksort.php )
 *
 * Sort the entries by key using user defined function. WarningThis
 * function is currently not documented; only its argument list is
 * available.
 *
 * @cmp_function
 *             mixed   The compare function used for the sort.
 *
 * @return     mixed   No value is returned.
 */
  public function uksort($cmp_function) {
    uksort($this->arr, $cmp_function);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/arrayiterator.valid.php )
 *
 * Checks if the array contains any more entries.
 *
 * @return     mixed   No value is returned.
 */
  public function valid() {
    return current($this->arr) !== false;
  }
}

class MutableArrayIterator extends ArrayIterator {
  public function __construct(&$array, $flags = 0) {
    $this->arr = &$array;
    $this->flags = $flags;
    reset($this->arr);
  }

  public function &currentRef() {
    return hphp_current_ref($this->arr);
  }
}

// http://www.php.net/~helly/php/ext/spl/iteratoriterator_8inc-source.html
class IteratorIterator implements OuterIterator {
  private $iterator;

  public function __construct(Traversable $iterator) {
    if ($iterator instanceof IteratorAggregate) {
      $iterator = $iterator->getIterator();
    }
    if ($iterator instanceof Iterator) {
      $this->iterator = $iterator;
    } else {
      throw new Exception(
        "Need to pass a Traversable that is convertable to an iterator");
    }
  }

  public function getInnerIterator() {
    return $this->iterator;
  }

  public function valid() {
    return $this->iterator->valid();
  }

  public function key() {
    return $this->iterator->key();
  }

  public function current() {
    return $this->iterator->current();
  }

  public function next() {
    return $this->iterator->next();
  }

  public function rewind() {
    return $this->iterator->rewind();
  }

  public function __call($func, $params) {
    return call_user_func_array(array($this->iterator, $func), $params);
  }
}

// http://www.php.net/~helly/php/ext/spl/filteriterator_8inc-source.html
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.filteriterator.php )
 *
 * This abstract iterator filters out unwanted values. This class should
 * be extended to implement custom iterator filters. The
 * FilterIterator::accept() must be implemented in the subclass.
 *
 */
abstract class FilterIterator extends IteratorIterator {
  private $it;

  public function __construct(Iterator $it) {
    $this->it = $it;
  }

  public function rewind() {
    $this->it->rewind();
    $this->fetch();
  }

  abstract function accept();

  private function fetch() {
    while ($this->it->valid()) {
      if ($this->accept()) {
        return;
      }
      $this->it->next();
    }
  }

  public function next() {
    $this->it->next();
    $this->fetch();
  }

  public function valid() {
    return $this->it->valid();
  }

  public function key() {
    return $this->it->key();
  }

  public function current() {
    return $this->it->current();
  }

  protected function __clone() {
    // disallow clone
  }

  public function getInnerIterator() {
    return $this->it;
  }

  public function __call($func, $params) {
    return call_user_func_array(array($this->it, $func), $params);
  }
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.iteratoraggregate.php )
 *
 * Interface to create an external Iterator.
 *
 */
interface IteratorAggregate extends Traversable {
// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/iteratoraggregate.getiterator.php )
 *
 * Returns an external iterator.
 *
 * @return     mixed   An instance of an object implementing Iterator or
 *                     Traversable
 */
  public function getIterator();
}


///////////////////////////////////////////////////////////////////////////////
// http://www.php.net/~helly/php/ext/spl/appenditerator_8inc-source.html

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.appenditerator.php )
 *
 * An Iterator that iterates over several iterators one after the other.
 *
 */
class AppendIterator implements OuterIterator {
  private $iterators;

  function __construct() {
    $this->iterators = new ArrayIterator(array());
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/appenditerator.append.php )
 *
 * Appends an iterator. WarningThis function is currently not documented;
 * only its argument list is available.
 *
 * @it         mixed   The iterator to append.
 *
 * @return     mixed   No value is returned.
 */
  function append(Iterator $it) {
    $this->iterators->append($it);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/appenditerator.getinneriterator.php )
 *
 * Get an inner iterator WarningThis function is currently not documented;
 * only its argument list is available.
 *
 * @return     mixed   The current inner Iterator.
 */
  function getInnerIterator() {
    return $this->iterators->current();
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/appenditerator.rewind.php )
 *
 * Rewind to the first element of the first inner Iterator. WarningThis
 * function is currently not documented; only its argument list is
 * available.
 *
 * @return     mixed   No value is returned.
 */
  function rewind() {
    $this->iterators->rewind();
    if ($this->iterators->valid()) {
      $this->getInnerIterator()->rewind();
    }
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/appenditerator.valid.php )
 *
 * Checks validity of the current element. WarningThis function is
 * currently not documented; only its argument list is available.
 *
 * @return     mixed   Returns TRUE on success or FALSE on failure.
 */
  function valid() {
    return $this->iterators->valid() && $this->getInnerIterator()->valid();
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/appenditerator.current.php )
 *
 * Gets the current value. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @return     mixed   The current value if it is valid or NULL otherwise.
 */
  function current() {
    /* Using $this->valid() would be exactly the same; it would omit
     * the access to a non valid element in the inner iterator. Since
     * the user didn't respect the valid() return value false this
     * must be intended hence we go on. */
    return $this->iterators->valid() ?
      $this->getInnerIterator()->current() : NULL;
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/appenditerator.key.php )
 *
 * Get the current key WarningThis function is currently not documented;
 * only its argument list is available.
 *
 * @return     mixed   The current key if it is valid or NULL otherwise.
 */
  function key() {
    return $this->iterators->valid() ? $this->getInnerIterator()->key() : NULL;
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/appenditerator.next.php )
 *
 * Moves to the next element. If this means to another Iterator then it
 * rewinds that Iterator. WarningThis function is currently not documented;
 * only its argument list is available.
 *
 * @return     mixed   No value is returned.
 */
  function next() {
    if (!$this->iterators->valid()){
      return; /* done all */
    }
    $this->getInnerIterator()->next();
    if ($this->getInnerIterator()->valid()) {
      return; /* found valid element in current inner iterator */
    }
    $this->iterators->next();
    while ($this->iterators->valid()) {
      $this->getInnerIterator()->rewind();
      if ($this->getInnerIterator()->valid()) {
        return; /* found element as first elemet in another iterator */
      }
      $this->iterators->next();
    }
  }

  function __call($func, $params) {
    return call_user_func_array(array($this->getInnerIterator(), $func),
                                $params);
  }
}
