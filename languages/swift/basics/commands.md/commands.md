## The basics

Basic types

```
import Foundation

// String is "regular text"
let myFirstItem: String = "Hello, world!"

// Reference previously created objects
let myTitle = myFirstItem

// Boolean (aka Bool) is true or false
let mySecondItem: Bool = true
let myThirdItem: Bool = false

// Do not do!
//let myFourthItem: String = "true"

// Swift is a type-safe language
let myFifthItem: Bool = true
let mySixthItem: String = "Hello, world!"
let mySeventhItem = "Hello, world!"

// Date
let myFirstDate: Date = Date()


// Number can be Int, Double, CGFloat & more

// Int is a whole Integer
let myFirstNumber: Int = 1

// Use Double for math
let mySecondNumber: Double = 1.0

// Use CGFloat for UI
let myThirdNumber: CGFloat = 1.0
```

Tuples

```swift
import Foundation

var userName: String = "Hello"
var userIsPremium: Bool = false
var userIsNew: Bool = true

@MainActor func getUserName() -> String {
    userName
}
@MainActor func getUserIsPremium() -> Bool {
    userIsPremium
}

// limited to 1 return type
@MainActor func getUserInfo() -> String {
    
    let name = getUserName()
    let isPremium = getUserIsPremium()
    
    return name
}

// tuple can combine multiple pieces of data
@MainActor func getUserInfo2() -> (String, Bool) {
    let name = getUserName()
    let isPremium = getUserIsPremium()
    
    return (name, isPremium)
}

var userData1: String = userName
var userData2: (String, Bool, Bool) = (userName, userIsPremium, userIsNew)


let info1 = getUserInfo2()
let name1: String = info1.0

@MainActor func getUserInfo3() -> (name: String, isPremium: Bool) {
    let name = getUserName()
    let isPremium = getUserIsPremium()
    
    return (name, isPremium)
}

let info2 = getUserInfo3()
let name2 = info2.name

@MainActor func getUserInfo4() -> (name: String, isPremium: Bool, isNew: Bool) {
    return (userName, userIsPremium, userIsNew)
}

func doSomethingWithUserInfo(info: (name: String, isPremium: Bool, isNew: Bool)) {
    
}


let info = getUserInfo4()
doSomethingWithUserInfo(info: info)
```

#### See more in
- [Swift Playground](https://github.com/leorenis/swift-samples/tree/main/SwifthinkingBasics.playground/Pages)
- [SwiftUI Bootcamp](https://github.com/leorenis/swift-samples/tree/main/SwiftUIThinkingBootcamp/SwiftUIThinkingBootcamp)
- [MVVM TODO List](https://github.com/leorenis/swift-samples/tree/main/TodoList/TodoList)