## Training Async Await

What changed?
- The code looks synchronous, even though it's asynchronous, which makes it easier to read and maintain.
- The try/catch block handles errors clearly and directly.
- It avoids callback hell and even the overuse of .then().

```
function getStudent() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve({ id: 1, name: 'Jonh Doe' });
        }, 1000);
    });
}

function getSubject(studentID) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve({
                studentId: studentID,
                subject: 'Functional programming'
            });
        }, 2000);
    });
}

function getCourses(subject) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve([
                { name: 'Advanced JavaScript' },
                { name: 'Streams in Node.js' }
            ]);
        }, 3000);
    });
}

async function main() {
    try {
        const student = await getStudent();
        const subject = await getSubject(student.id);
        const courses = await getCourses(subject.subject);

        console.log(`
Student: ${student.name}
Subject: ${subject.subject}
Courses:
- ${courses.map(c => c.name).join('\n- ')}`);
    } catch (error) {
        console.error('Erro:', error);
    }
}

main();


```

### Playground
- https://playcode.io/rxjs