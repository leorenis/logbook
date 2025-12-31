## kill command

`kill` – terminate or signal a process
The kill utility sends a signal to the processes specified by the pid operands.

Only the super-user may send signals to other users' processes.

### Killing a process in some port

```bash
kill $(lsof -t -i:3000)
```

### Read more
```bash
man kill
```