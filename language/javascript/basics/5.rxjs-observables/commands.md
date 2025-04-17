## Observables RxJS

### What changed?

### Transformation of Functions into Observables:

- The `getStudent()` function now returns an Observable with of(). This makes it easier to handle the data flow.

- The `getSubject()` and `getCourses()` functions now use new Observable() to emit data, simulating asynchronous behavior, but with RxJS.

### Chaining Observables with `switchMap`:

- `switchMap` is used to chain the flow of Observables, ensuring that after each asynchronous call (like getSubject and getCourses), the next data is emitted in a continuous and reactive manner.

- The `switchMap` operator is also used to ensure that the data flow is "canceled" if something changes. In other words, if a new value is emitted before completing a request, the previous request is canceled, and the most recent value is processed.

### Reactive and Flexible Flow:

- By using RxJS, the code becomes reactive and can easily be modified to add more operators or even new data flows.

### 🚀 Advantages of RxJS:
- Cancellation: When using switchMap, it cancels the previous request as soon as a new one is emitted, allowing for more efficient flow control.

- Flow Composition: RxJS allows you to create more complex data flows with less code, handling asynchronous events in a smooth and fluent way.

- Flexibility: If new data or events arise (like a new student), you can emit these events at any time, and the system will react accordingly.

```
npm install rxjs
```

```
const { Observable, of } = require('rxjs');
const { switchMap } = require('rxjs/operators');

// Simulate async funtions using Observable
function getStudent() {
    return of({ id: 1, name: 'John Doe' }); // Retorna um Observable
}

function getSubject(studentID) {
    return of({
        studentId: studentID,
        subject: 'Functional programming'
    }).pipe(
        // Simulating a delay
        switchMap(() => {
            return new Observable(observer => {
                setTimeout(() => {
                    observer.next({ studentId: studentID, subject: 'Functional programming' });
                    observer.complete();
                }, 2000);
            });
        })
    );
}

function getCourses(subject) {
    return new Observable(observer => {
        setTimeout(() => {
            observer.next([
                { name: 'Advanced JavaScript' },
                { name: 'Streams in Node.js' }
            ]);
            observer.complete();
        }, 3000);
    });
}

// Fluxo com RxJS
getStudent().pipe(
    switchMap(student => {
        return getSubject(student.id).pipe(
            switchMap(subject => getCourses(subject.subject).pipe(
                // Atrasando o retorno até receber todos os dados
                switchMap(courses => {
                    return of({
                        student,
                        subject,
                        courses
                    });
                })
            ))
        );
    })
).subscribe({
    next: ({ student, subject, courses }) => {
        console.log(`
Student: ${student.name}
Subject: ${subject.subject}
Courses:
- ${courses.map(c => c.name).join('\n- ')}`);
    },
    error: (err) => {
        console.error('Error:', err);
    }
});


```


### See more
- https://egghead.io/q/rxjs
- https://egghead.io/courses/rxjs-beyond-the-basics-operators-in-depth