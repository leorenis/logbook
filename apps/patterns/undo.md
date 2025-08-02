## The basics

### Undo Pattern Programming in Software Development

In software development, **"undo pattern programming"** primarily refers to the implementation of functionality that allows users to reverse or revert previous actions. This is commonly achieved through the use of specific design patterns, most notably the **Command Pattern** and the **Memento Pattern**.

---

### 1. Command Pattern

#### Concept

This pattern encapsulates a request as an object, thereby allowing for:

* Parameterization of clients with different requests
* Queuing of requests
* Logging of requests

It also supports **undoable operations** by requiring each command object to have both an `execute()` method and an `unexecute()` (or `undo()`) method.

#### Implementation

* When an action is performed, a corresponding **command object** is created and executed.
* This command object is typically added to a **history stack**.
* To undo, the last command is **popped** from the stack and its `unexecute()` method is called.

#### Benefits

* Provides a **clear separation of concerns**
* Makes it easy to **add new commands**
* Naturally supports **undo/redo functionality**

---

### 2. Memento Pattern

#### Concept

This pattern allows an object's **internal state** to be saved and restored **without violating encapsulation**. It involves three main components:

* **Originator**: The object whose state needs to be saved
* **Memento**: An object that stores the internal state of the Originator
* **Caretaker**: An object that manages the Mementos (e.g., storing them in a history list)

#### Implementation

* When an undo point is needed, the **Originator** creates a **Memento** containing its current state and passes it to the **Caretaker**.
* To undo, the Caretaker retrieves a Memento from its history and restores the Originator's state from it.

#### Benefits

* Provides a way to **capture and externalize** an object's internal state
* Enables **robust undo/redo mechanisms**, especially for complex objects

---

### Summary

In essence, **"undo pattern programming"** involves designing your application's architecture to **track changes** and provide mechanisms (like command objects or state snapshots) to **reverse those changes** when requested by the user.

---

Let me know if you want this styled for a particular platform (e.g., GitHub, Notion, or documentation tools).


#### See more in
- https://en.wikipedia.org/wiki/Command_pattern
- https://stackoverflow.com/questions/49755/design-pattern-for-undo-engine
- https://en.wikipedia.org/wiki/Memento_pattern
