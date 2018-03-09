<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\Markdown\Blocks;

use type Facebook\Markdown\Inlines\Inline;

class LinkReferenceDefinition extends LeafBlock {
  final public function __construct(
    private string $label,
    private string $destination,
    private ?vec<Inline> $title,
  ) {
  }

  public function getLabel(): string {
    return $this->label;
  }

  public function getDestination(): string {
    return $this->destination;
  }

  public function getTitle(): ?vec<Inline> {
    return $this->title;
  }
}
