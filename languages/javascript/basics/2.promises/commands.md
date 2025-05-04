## Training promises

What changed?
- Each function now returns a Promise, which avoids the "pyramid effect" of callback hell.
- With .then(), we chain the results in a clean and sequential way.
- The .catch() at the end centralizes error handling.

```javascript
function getStudent() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve({ id: 1, nome: 'John Doe' });
        }, 1000);
    });
}

function getSubject(studentId) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve({
                studentId: studentId,
                subject: 'Functional programming'
            });
        }, 2000);
    });
}

function getCourses(subject) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve([
                { nome: 'Advanced JavaScript' },
                { nome: 'Streams in Node.js' }
            ]);
        }, 3000);
    });
}

// Chaining Promises
getStudent()
    .then(student => {
        return getSubject(student.id)
            .then(subject => ({ student, subject }));
    })
    .then(({ student, subject }) => {
        return getCourses(subject.subject)
            .then(courses => ({ student, subject, courses }));
    })
    .then(({ student, subject, courses }) => {
        console.log(`
student: ${student.nome}
subject: ${subject.subject}
Courses:
- ${courses.map(c => c.nome).join('\n- ')}`);
    })
    .catch(error => {
        console.error('Erro:', error);
    });

```

### Playground
- https://playcode.io/rxjs