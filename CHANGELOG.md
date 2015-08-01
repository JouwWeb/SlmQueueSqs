# 0.5.0

- [BC] SlmQueueSqs is now based on AWS SDK v3. As a consequence, minimum PHP dependency has been bumped to 5.5.

# 0.4.2

- SlmQueueSqs now rethrow SQS exceptions instead of silently reinserting the job without notice.

# 0.4.1

- Fix a bug when batch pushing/batch deleting a multiple of 10 jobs into the queue.

# 0.4.0

- First stable release in 0.4.x branch

# 0.4.0-beta3

- [BC] Due to changes in SlmQueue ([changelog](https://github.com/juriansluiman/SlmQueue/blob/master/CHANGELOG.md))
existing jobs won't be able to be executed correctly.


# 0.4.0-beta2

- Update dependency to SlmQueue 0.4.0-beta2

# 0.4.0-beta1

- [BC] Bump SlmQueue dependency to 0.4. Please read SlmQueue CHANGELOG for further information
- `batchDelete` now also automatically splice jobs if you submit more than 10 jobs.

# 0.3.2

- `batchPush` now automatically splices jobs if you submit more than 10 jobs (which is the max limit per SQS
batch), so that you can submit as many jobs you want, and SlmQueueSqs takes care of sending everything.

# 0.3.1

- Custom metadata set to a job is now correctly retrieved when jobs are pushed, along SQS own metadata.

# 0.3.0

- Use AWS ZF 2 module
- pop method now only returns 1 job. You must use batchPop to return more than one job.
- You can now directly specify a queue URL for a given queue name (hence avoiding one HTTP request)
- [BC] SQS service has been removed, please now use the official AWS SDK to list or create queues
- [BC] SqsQueue now uses `getQueueUrl` instead of `createQueue`. This means that you must first create
queues using the official SQS client or the AWS console. This change has been made to offer a more predictable
behaviour for SQS queues.

# 0.2.4

- Fix a bug when SQS returns no messages

# 0.2.3

- Fix a bug with batch push
- Fix a bug with batch delete
- More unit tests

# 0.2.2

- Set the minimal version of AWS SDK to 2.1.1 (which is the first version to support Amazon SQS)

# 0.2.1

- Fix compatibilities problems with PHP 5.3

# 0.2.0

This version is a complete rewrite of SlmQueue. It is now splitted in several modules and support both
Beanstalkd and Amazon SQS queue systems through SlmQueueBeanstalkd and SlmQueueSqs modules.
