<?php
namespace Acme\Liskov;

/**
Let q(x) be a property provable about objects of type T.
Then q(y) should be provable for objects y of type S
where S is a subtype of T.

-> Derived classed must be substitutable for their base class
1. Signature must match
2. Precondidions can't be greater
3. Post conditions at least match to
4. Exception types must match
**/

interface iLessonRespositoryInterface {

    /**
     * Fetch all records
     *
     * @return array
     */

    public function getAll();
}

class FileLessonRepository implements iLessonRespositoryInterface {
    public function getAll() {
        return [];
    }
}

class DbLessonRepository implements iLessonRespositoryInterface {
    public function getAll() {
        // return Lesson::all(); -> violates LSP
        return Lesson::all()->toArray();  // does not violate LSP
    }
}

function foo(iLessonRespositoryInterface $lesson) {
    $lessons = $lesson->getAll();

    // if (instanceof) -> probable break of LSP
}