## Training Async Await

What changed?
- Each function now returns a Promise, which avoids the "pyramid effect" of callback hell.
- With .then(), we chain the results in a clean and sequential way.
- The .catch() at the end centralizes error handling.

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