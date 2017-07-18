Title: Your mission, should you choose to accept it...
Date: 2007-09-25 17:13
Author: Robin
Tags: Development, General, Software
Category: Blog
Slug: your-mission-should-you-choose-to-accept-it
nocomments: True

A few weeks ago I sent the following challenge to the
[PYxIDEs](http://pyxides.stani.be/) list, and I thought it might be a
good idea to republish it here to give it a little more exposure.

<!--TEASER_END-->

	<fade from dramatic music with a lit fuse running across the screen...>
	
	Hi all,
	
	Kevin O. and I recently discussed in IM about yet another
	wxPython-based code editor and the subject of my Emacs use came up.
	I've been an Emacs user for more than two decades, and it has been a
	love/hate relationship for most of that time (I hate that I love it
	and I love hating it) but I would like to dump it for something else,
	iff the RIGHT something else came along. Part of our discussion
	centered on the fact that it is not just the emacs-style key-bindings
	that keep me using Emacs (most of the key-bindings I use are
	customized anyway, or I load extensions to add CUA key-bindings, etc.)
	but it is some more fundamental features that I use many times every
	day that keep me there.
	
	So here is your challenge and your mission impossible, should you
	choose to accept it: Create a code editor that will pry emacs and its
	25-year-old nearly dead technology out from under my fingers.
	
	Here are the emacs features that I use very often that any editor
	would need to have in order for me to switch. I've seen some editors
	with some of these, but none with all unless it is an emacs clone.
	I'll leave out the obvious things like platform independence, good
	syntax highlighting, calltips or auto-completion. Also, these features
	are just dealing with the code editor portion of the app, if it is
	more than that (like a full IDE) then some of these things may or may
	not apply to the non code editor parts:
	
	* Python should be just one of the languages that this editor
	supports, not the primary target. I spend as much time in C/C++ as I
	do Python, and my editor of choice needs to help me with C/C++ coding
	just as much as it does with Python. So some sort of support for
	calltips and auto-completion would be marvelous, and also being able
	to act as a front-end for gdb since I currently use emacs for that
	most of the time.
	
	* Absolutely every feature or action must be able to be done with
	just the keyboard. Moving the hand back and forth to the mouse wastes
	time, breaks concentration and contributes to RSI. Multi-key sequences
	are fine as long as they are grouped in a logical fashion. For example
	in emacs all of the version control features are accessible via the
	Ctrl-x,v sequence plus one more letter.
	
	* Incremental search, both forward and reverse, and wrapping around
	after you've reached the end or the beginning of the document. I like
	to have the same key to start the search and also do a search-next
	after you've typed all the characters you are searching for, and also
	to have backspace go back one search position and/or remove one
	character from the search text.
	
	* Multiple top level windows, and able to show any buffer in any TLW,
	including those that are already displayed in another TLW. Of course
	there should be key-bindings available for opening a new TLW, cycling
	forward and backward through the buffer list, and a way to select a
	buffer from a popup list of buffer/file names.
	
	* The Kill-Ring. For those of you that have never used an emacs-like
	editor it works like this: There is a collection of the N previous
	blocks of text that have been cut or copied (in emacs 'cut' == 'kill'
	more or less) When I do a yank (paste) it uses the last thing put in
	the kill-ring. If I then immediately use another key-binding then it
	replaces that pasted text with the next item in the kill ring, and so
	on until I eventually wrap around and get back to the first one in the
	ring, or I do some other command or move the cursor somewhere else.
	
	* Registers. A text snippet can be copied into a register, which is
	like the kill ring except you refer to each one by name, where the
	names are 'a' through 'z'. You can also append to a register that
	already has text in it, and you can paste the contents of a register
	into the document at the current cursor location.
	
	* Able to have selections be either a stream of characters or a
	rectangle. A stream selection is like what you have in all text
	editors, it starts from position a on line N and continues forward or
	back to position b on line M and includes all the characters in
	between. A rectangle selection is all the characters between position
	a and b on lines N to M. In other words, it has width and height and
	it might be something like positions 5 through 10 on lines 20 to 25.
	Cutting or deleting a rectangle removes the text in the rectangle and
	shifts any text to the right of the rectangle over. It does not remove
	any lines although they may end up being empty. Pasting a rectangle
	inserts the new text with the upper-left of the rectangle at the
	current cursor position, shifts existing text to the right if needed,
	and fills with spaces on the left if a line affected by the paste is
	not long enough. New lines are not added unless the file needs to be
	extended to accommodate the rectangle paste. Rectangles can also be
	put into registers.
	
	* Good keystroke macro recording and the ability to save and load
	keystroke macros, and the ability to assign a key-binding to a saved
	recorded macro. Any time I need to make the same edits to a bunch of
	lines or groups of lines I'll record doing it on the first one
	including the keystrokes needed to reposition for the next line, and
	then stop recording and then it's just one keystroke to replay the
	keystrokes for every other line that needs it done. I record, use and
	throw away up to a dozen or so macros per day.
	
	* If you must have a toolbar make it optional and keep it simple.
	Toolbars require the mouse and the goal is to keep the hand off the
	mouse as much as possible.
	
	* Similarly, avoid using popup dialogs whenever possible. This
	includes things like the file dialog. I don't mind seeing the file
	dialog if I select a menu item, because most likely my hand is already
	on the mouse, but the rest of the time I just want to hit a key, type
	a path name (with tab-completion to help find stuff, up/down keys to
	cycle through past selections) and press enter. So I would prefer this
	editor to have something like emacs' minibuffer, or the QuickFind
	panel in Firefox. In other words, when there is something you would
	normally use a dialog for just create a small panel that rolls up from
	the bottom of the frame, put the keyboard focus there, perhaps do
	stuff in the main buffer as they are typing if appropriate, and then
	when the user is done the panel rolls out of sight again and keyboard
	focus is restored to their active buffer. This can be done for file
	open/saves, search & replace, specifying build or grep commands (see
	next item) choosing to execute some editor function by name that may
	not have a key-binding yet (see item after next) etc.
	
	* Flexible build/grep commands. Emacs handles both of these in almost
	the same way so I'll list them together here. I hit a key and am
	presented with either the default, or the most recently used compile
	or grep command. I can edit the command or use the up/down arrows to
	select previous commands that I've used. I then hit enter and emacs
	runs the command putting the output in an editor buffer. There is a
	key I can hit to kill the compile if needed. It then parses the output
	and there is a key I can use to find the file listed in the compile or
	grep output, load it, and position the cursor on the reported line.
	(This can even be done while the compile/grep is still running.)
	
	* For access to editor commands/functionality that may not be bound
	to a keystroke it's real nice to have the ability to hit a key, type
	the command name, press enter and then it's done. This can also allow
	for commands that might need to prompt for parameters, be interactive,
	etc. All editor commands should be named and can be bound to keys by
	name or executed by name in this way.
	
	* Regex search. Emacs has support for regular expression search modes
	for all of the search types, incremental search, search/replace,
	although I don't use it that much.
	
	* Multi-file search and replace. Be able to select files
	interactively, or by wildcard, or both. Enter search string, or regex,
	and replace text. The editor loads each file and does the search,
	allowing you to choose for each one whether to do the replacement, or
	replace all.
	
	* If it is a full IDE it would be nice to have a way to start just
	the code editor portion for quick edits.
	
	Things that would be nice to have, but that I could live without:
	
	* Interactive diffs, merges and applying of patches.
	
	* Able to be a front-end for gdb.
	
	* Able to be a front-end for CVS, SVN, etc.
	
	* Be able to run shell commands, or the shell itself in an editor
	buffer.
	
	* have a built-in psychotherapist or be able to play towers of hanoi.
	;-)
	
	<warning: this message will self destruct in 5 seconds...>

