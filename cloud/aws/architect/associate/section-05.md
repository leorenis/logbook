## EC2 Fundamentals

### Amazon EC2
- EC2 is one of the most popular of AWS'offering
- EC2 = Elastic Compute Cloud = Infrastructure as a Service
- It mainly consists in the capability of: 
  - Renting virtual machines (EC2)
  - Storing data on virtual drives (EBS)
  - Distributing load across machines (ELB)
  - Scaling the services using an auto-scaling group (ASG)

- Knowing EC2 is fundamental to understand how the Cloud works

### EC2 sizing & configuration options
- Operating System (OS): Linux, Windows or Mac OS
- How much compute power & cores (CPU)
- How much random-access memory (RAM)
- How much storage space:
  - Network-attached (EBS & EFS)
  - hardware (EC2 Instance Store)
- Network card: speed of the card, Public address
- Firewall rules: security group
- Bootstrap script (configure at first louch): EC2 User Data

### EC2 User Data
- It is possible to bootstrap our instances using an EC2 User Data script.
- bootstrapping means lounching commands when a machine starts
- That scripts is only run once at the instance first start
- EC2 user data is used to automate boot tasks such as:
  - Installing updates
  - Installing software
  - Downloading common files from the internet
  - Anything you can think of 
- The EC2 User Data Script runs with the root user

### EC2 Instance Types: example

| Instance    | vCPU | Mem (GiB) | Storage         | Network Performance | EBS bandwidth (Mbps) |
| ----------- | ---- | --------- | --------------- | ------------------- | -------------------- |
| t2.micro    | 1    | 1         | EBS-Only        | Low to Moderate     |                      |
| t2.xlarge   | 4    | 16        | EBS-Only        | Moderate            |                      |
| c5d.4xlarge | 16   | 32        | 1x 400 NVMe SSD | Up to 10 Gbps       | 4,750                |
| r5.16xlarge | 64   | 512       | EBS Only        | 20 Gbps             | 13,600               |
| m5.8xlarge  | 32   | 128       | EBS Only        | 10 Gbps             | 6,800                |

### EC2 Instance Types: overview
- You can use different types of EC2 instances that are optimised for different use cases. [AWS EC2 Instance Types](https://aws.amazon.com/ec2/instance-types/);
- AWS has the following naming convention: e.g. m5.2xlarge
  - m: instance class (in this case: general purpose instance);
  - 5: generation (AWS improves them over time);
  - 2xlarge: size within the instance class;

#### EC2 Instance Types: General Purpose
- Great for a diversity of workload such as web services or code repositories;
- Balance between:
  - Compute
  - Memory
  - Networking

#### EC2 Instance Types: Compute Optimized
- Great for compute-intensive tasks that require high performance processors:
  - Batch processing workloads
  - Media transcoding
  - High performance web servers
  - High performance computing (HPC)
  - Scientific modeling & machine learning
  - Dedicated gaming servers
  - For now, all the compute optimazed are of the *c* name: c5, c6, c7g.xlarge...

#### EC2 Instance Types: Memory Optimized
- Fast performance for workloads that process large data sets in memory
- Use cases: 
  - High performance, relational/non-relational databases
  - Distributed web scale cache stores
  - In-memory databases optimized for BI (business intelligence)
  - Applications performing real-time processing of big unstructured data
  - The name starts with *R*: r5, r6a...

#### EC2 Instance Types: Storage Optimized
- Great for storage-intensive tasks that require high, sequential read and write access to large data sets on local storage
- Use cases:
  - High frequency online transaction processing (OLTP) systems
  - Relational & NoSQL databases
  - Cache for in-memory databases (for example, Redis)
  - Data warehousing applications
  - Distributed file systems


Great website: https://instances.vantage.sh/