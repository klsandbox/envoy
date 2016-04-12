@servers(['web' => 'forge@ssh.klsandbox.com'])

@task('su', ['on' => 'web'])
    /home/forge/satis.klsandbox.com/bin/update.sh {{ $var }}
@endtask

@task('ls', ['on' => 'web'])
ls -la
@endtask

@after
#    @hipchat('token', 'room', 'Envoy')
@endafter
