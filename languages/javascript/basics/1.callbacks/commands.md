## Training callbacks

What this code demonstrates:

- How to work with nested callbacks (the infamous "callback hell").
- How to pass data between asynchronous calls.
- Simulates latency using setTimeout.

```javascript
function getStudent(callback) {
    setTimeout(() => {
        return callback(null, { id: 1, name: 'John Doe' });
    }, 1000);
}

function getSubject(studentId, callback) {
    setTimeout(() => {
        return callback(null, {
            sutdentId: studentId,
            subject: 'Functional programming'
        });
    }, 1500);
}

function getCourses(subject, callback) {
    setTimeout(() => {
        return callback(null, [
            { name: 'Advanced JavaScript' },
            { name: 'Streams in Node.js' }
        ]);
    }, 1200);
}

// Chaining functions using callbacks
getStudent((error, student) => {
    if (error) {
        console.error('Error when get student:', error);
        return;
    }

    getSubject(student.id, (errorDisc, subject) => {
        if (errorDisc) {
            console.error('Error when get subject:', errorDisc);
            return;
        }

        getCourses(subject.subject, (courseError, courses) => {
            if (courseError) {
                console.error('Error when get courses:', courseError);
                return;
            }

            console.log(`
student: ${student.name}
subject: ${subject.subject}
courses:
- ${courses.map(c => c.name).join('\n- ')}
            `);
        });
    });
});

```

### Playground
- https://playcode.io/rxjs