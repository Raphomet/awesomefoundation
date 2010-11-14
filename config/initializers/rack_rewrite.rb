ActionController::Dispatcher.middleware.insert_before(Rack::Lock, Rack::Rewrite) do
  r301 %r{/contact?}, "/blog/contact/"
  r301 %r{/about?}, "/blog/about/"
  r301 %r{/faq?}, "/blog/faq/"
end
