## Observables RxJS

What changed?
- We use a Subject as the entry point of our reactive flow.
- With switchMap, we handle the chaining in a way similar to Promise.then, but in a reactive and cancelable manner.
- The flow becomes flexible, and you can emit new students at any time and see the data flowing.

```
npm install rxjs
```

```
const { Subject } = require('rxjs');
const { switchMap } = require('rxjs/operators');

// Simulate async funtions
function getStudent() {
    return new Promise(resolve => {
        setTimeout(() => resolve({ id: 1, name: 'John Doe' }), 1000);
    });
}

function getSubject(studentID) {
    return new Promise(resolve => {
        setTimeout(() => resolve({
            studentId: studentID,
            subject: 'Functional programming'
        }), 2000);
    });
}

function getCourses(subject) {
    return new Promise(resolve => {
        setTimeout(() => resolve([
            { name: 'Advanced JavaScript' },
            { name: 'Streams in Node.js' }
        ]), 3000);
    });
}

// Creates a subject to start flow 
const studentSubject = new Subject();

studentSubject.pipe(
    switchMap(student => {
        return getSubject(student.id).then(subject =>
            ({ student, subject })
        );
    }),
    switchMap(({ student, subject }) => {
        return getCourses(subject.subject).then(courses =>
            ({ student, subject, courses })
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

// Inicia o fluxo
getStudent().then(student => studentSubject.next(student));

```

### See more
- https://egghead.io/q/rxjs
- https://egghead.io/courses/rxjs-beyond-the-basics-operators-in-depth