<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class Foo<T> {
  public function f1(T $x): void {
  }
}

function f2(): Foo<?int> {
  $f = new Foo();
  $f->f1(null);
  return $f;
}

